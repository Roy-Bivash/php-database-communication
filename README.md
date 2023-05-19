# php-database-communication

A Simple PHP Database Connection Tool

## Description
This project provides a PHP class called `Communication.php` that allows you to establish connections with MySQL or PostgreSQL databases. It simplifies the process of connecting to a database and executing queries.

## Features
- Supports connection to MySQL and PostgreSQL databases
- Provides an easy-to-use interface for executing SQL queries


## Installation
1. Clone the repository:

```git clone https://github.com/Roy-Bivash/php-database-communication```

3. Include the Communication.php file in your PHP script:

```require_once 'path/to/Communication.php';```

## Usage
1. Create an instance of the `Communication` class:

```$db = new Communication();```

2. Configure a `.env` file in the root of your project

```
# If you are using a mysql database replace pgsql with mysql
# Replace the host if needed
# Replace the port if needed
# Replace [NAME_OF_DATABASE] with your database name 
BDD_DNS=pgsql:host=127.0.0.1;port=5432;dbname=[NAME_OF_DATABASE];

# Replace [DATABASE_LOGIN] with your Login infos
BDD_LOGIN=[DATABASE_LOGIN]

# Replace [DATABASE_PASSWORD] with your Login infos
BDD_MDP=[DATABASE_PASSWORD]
```

3. Establish a connection to a database :

  a. include the `DotEnv` class and `Communication` class :
```
include "./class/DotEnv.php";
include "./class/Communication.php";
```

  b. Load the `env` file :
```
$envFile = new DotEnv('./.env');
$envFile->load();
```

  c. Create an instance of the `Communication` class :
```
$database = new Communication();
```

  d. Make a Query :
```
// QUERY without parameters :
$response = $database->QUERY("SELECT id FROM users;");

// QUERY with parameters :
$response = $database->QUERY("SELECT id FROM users WHERE login = ?;", ["jean"]);

// QUERY with no returned values :
$response = $database->QUERY("UPDATE name FROM users WHERE id = ? AND name = ?;", [202, "jean"], ["response" => false]);
```

## Contributing
Contributions are welcome! If you find a bug or have suggestions for improvement, please open an issue or submit a pull request.

## License
MIT License


Feel free to customize and modify
