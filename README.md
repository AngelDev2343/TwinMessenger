# Twin Messenger 💬

![Licencia](https://img.shields.io/badge/license-MIT-blue.svg)
![Estado](https://img.shields.io/badge/status-active-success.svg)
![PHP](https://img.shields.io/badge/backend-PHP-777BB4.svg)
![MySQL](https://img.shields.io/badge/database-MySQL-4479A1.svg)

**Twin-Messenger** es una aplicación de chat nostálgica que revive la clásica experiencia de MSN Messenger. Construida con tecnologías web nativas, incluye mensajería instantánea, estado de usuario y la icónica función "Buzz" (Zumbido).

---

## 📸 Demo

| Login | Lista de Contactos | Conversación |
|-------|--------------------|--------------|
| <img width="452" alt="Login" src="https://github.com/user-attachments/assets/2f8e4e34-dd7c-48cf-90d4-4fb075ace2ce" /> | <img width="452" alt="Contact List" src="https://github.com/user-attachments/assets/d9d213a9-86b8-4dc5-a61f-9f8b2efdb094" /> | <img width="452" alt="Conversation" src="https://github.com/user-attachments/assets/31140da9-c7df-4aa4-a28c-871cbe826698" /> |

 
## 🚀 Características

- 📨 **Mensajería Instantánea:** Sistema de chat fluido usando AJAX Polling.
- 🔔 **Buzz (Zumbido):** ¡Haz vibrar la pantalla de tu contacto con el sonido clásico!
- 🟢 **Estado de Usuario:** Detección automática de En línea / Desconectado.
- 👥 **Gestión de Contactos:** Agrega amigos mediante correo electrónico.
- 🔊 **Notificaciones Sonoras:** Sonidos para nuevos mensajes y zumbidos.
- 📱 **Diseño Responsive:** Adaptado para móvil y escritorio.

## 🛠️ Stack Tecnológico

* **Frontend:** HTML5, CSS3, JavaScript Vanilla.
* **Backend:** PHP (Nativo, sin frameworks).
* **Base de Datos:** MySQL / MariaDB.
* **Arquitectura:** API REST con autenticación basada en sesiones PHP.

## 🔧 Instalación y Configuración

Sigue estos pasos para ejecutar el proyecto localmente.

### Prerrequisitos
* **PHP:** Versión 7.4 o superior (debe estar en el PATH del sistema).
* **MySQL:** (Se recomienda usar XAMPP/WAMP solo para iniciar el servicio de base de datos).

### Pasos

1.  **Clonar el repositorio**
    ```bash
    git clone https://github.com/AngelSPerez/Twin-Messenger.git
    cd Twin-Messenger
    ```

2.  **Configuración de la Base de Datos (MySQL)**
    * Inicia el servicio de MySQL (desde XAMPP o terminal).
    * Abre phpMyAdmin o tu gestor SQL preferido.
    * Crea una base de datos llamada `twin_messenger`.
    * Importa el archivo `twin_messenger.sql` ubicado en la raíz del proyecto.

3.  **Configuración de Conexión**
    Asegúrate de tener un archivo de conexión en `api/` (por ejemplo, `db_connect.php`) con tus credenciales locales:
    ```php
    $host = 'localhost';
    $db   = 'twin_messenger';
    $user = 'root'; // Usuario por defecto en XAMPP
    $pass = '';     // Contraseña por defecto en XAMPP (vacía)
    ```

4.  **Iniciar el Servidor**
    Usa el servidor de desarrollo integrado de PHP:
    ```bash
    # Ejecuta este comando en la raíz del proyecto
    php -S localhost:3000
    ```

5.  **¡Listo!**
    Abre tu navegador en: `http://localhost:3000/index.html`

## 🧪 Usuarios de Prueba
La base de datos incluye cuentas pre-creadas para pruebas rápidas:
* **Usuario 1:** `angel@gmail.com` | **Pass:** `123456`
* **Usuario 2:** `alex@gmail.com`  | **Pass:** `123456`

## 🤝 Contribuciones

¡Las contribuciones son bienvenidas! Consulta el archivo [CONTRIBUTING.md](CONTRIBUTING.md) para saber cómo colaborar.

## 📄 Licencia

Este proyecto está bajo la Licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.

---
Hecho con nostalgia por [AngelDev2343](https://github.com/AngelDev2343)
