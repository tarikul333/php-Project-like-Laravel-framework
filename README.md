# PHP Mini Laravel-like Framework

A lightweight custom PHP MVC framework inspired by Laravel.  
This project is built for learning purposes — to understand how Laravel works under the hood.

---

## ✅ Features

- 🧱 Clean MVC structure (Controllers, Models, Views, Core like Laravel)
- 🔐 Session-based Auth system (login, logout, form validation)
- 🛣️ Custom Router with controller@method mapping
- 🛡️ Route-based Middleware (e.g. auth, guest, admin) for access control
- 🧪 Custom Validator for input validation
- 🎨 Tailwind CSS for responsive and modern design

---

## 🧰 Requirements

- PHP 7.4 or higher
- MySQL/MariaDB
- Apache/Nginx or PHP built-in server
- Composer (if you plan to extend it with packages)

---

## ⚙️ Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/tarikul333/php-Project-like-Laravel-framework

---

## Set up your database and update the database credentials in your .env file or configuration file:

DB_HOST=localhost
DB_NAME=your_database_name
DB_USER=your_db_user
DB_PASS=your_db_password
DB_CHARSET=utf8mb4

---

## Start your PHP development server (optional, if no Apache/Nginx):

php -S localhost:8000 -t public

---

## Open your browser and go to:

http://localhost:8000/