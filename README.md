# CRUD Operations Application

This is a simple PHP-based CRUD (Create, Read, Update, Delete) application for managing user data. It uses Bootstrap for styling and a MySQL database for data storage.

## Features
- Add new users
- View a list of existing users
- Update user information
- Delete users

## Setup
1. Ensure you have a web server with PHP and MySQL installed (e.g., XAMPP, WAMP, MAMP).
2. Create a database named `crud_app`.
3. Import the `users.sql` file (if provided) into your database, or create a `users` table with `id`, `name`, `email`, and `age` columns.
4. Place the application files in your web server's document root (e.g., `htdocs` for XAMPP).
5. Configure the database connection in `db/db.php`.

## Usage
Access the application through your web browser:
`http://localhost/CRUDOPS/index.php`

## Technologies Used
- PHP: 8.x
- MySQL: 8.x
- Bootstrap: 5.x