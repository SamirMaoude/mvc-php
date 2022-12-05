# MVC architecture in PHP

## Installation

### Prerequisites

First of all, this project is designed to work with the latest versions of PHP (currently `^8.0`). Therefore, you will need to install it on your machine.

In addition, this project requires the use of a MySQL database. You will have to install AND configure your database and create a user.

### Configuration

Once you have installed your MySQL server, you can replace the identifiers used in the code with your own. In the `blog/src/lib/database.php` file, line 12:

```php
$database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'password');
```

You should also populate your database. You can load the default schema (and some data), contained in the `db.sql` file. To do this, you can use your MySQL administration interface, or run the following command, if you are on Linux:

```bash
mysql -ublog -p blog < db.sql
```

### Launch

You can use PHP's built-in web server to run this project. go to the `blog/` folder, then run the command `php -S localhost:8080` (you can choose the port you want if `8080` is already in use).

Alternatively, and if you have a WAMP or LAMP _stack_ installed, you can configure your Apache server to manage the `blog/` folder.
