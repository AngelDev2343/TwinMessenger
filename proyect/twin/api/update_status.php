<?php
// 🔥 CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// 🔥 Preflight OPTIONS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// 🔥 Soporte para sesión enviada por URL (iframe)
if (isset($_GET['PHPSESSID'])) {
    session_id($_GET['PHPSESSID']);
} elseif (isset($_POST['PHPSESSID'])) {
    session_id($_POST['PHPSESSID']);
}

session_start();
require_once '../config.php';

// Solo permitir POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['success' => false, 'message' => 'Método no permitido'], 405);
}

$userId = checkSession();
$conn = getDBConnection();

// Obtener JSON
$data = json_decode(file_get_contents('php://input'), true);
$status = isset($data['status']) ? sanitize($data['status']) : '';

// Validar estado
if (!in_array($status, ['online', 'offline', 'away'])) {
    jsonResponse(['success' => false, 'message' => 'Estado inválido'], 400);
}

// Actualizar estado y last_activity
$stmt = $conn->prepare("UPDATE users SET status = ?, last_activity = NOW() WHERE id = ?");
$stmt->bind_param("si", $status, $userId);

if ($stmt->execute()) {
    jsonResponse([
        'success' => true,
        'message' => 'Estado actualizado',
        'status' => $status
    ]);
} else {
    jsonResponse(['success' => false, 'message' => 'Error al actualizar estado'], 500);
}

$stmt->close();
$conn->close();
?>