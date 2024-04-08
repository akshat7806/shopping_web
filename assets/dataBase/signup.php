<?php
$host = 'localhost'; // or your database host name
$db   = 'shopping';     // your database name
$user = 'root';      // your database username
$pass = '';          // your database password
$charset = 'utf8mb4'; // character set (optional)

// Establishing a database connection using PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
   PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
   PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
   $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
   throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Signup process
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

   // Debugging statement to inspect hashed password
   echo "Hashed Password: $password";

   $stmt = $pdo->prepare("INSERT INTO users (username, user_password) VALUES (?, ?)");
   $stmt->execute([$username, $password]);

   echo "User registered successfully.";
}
