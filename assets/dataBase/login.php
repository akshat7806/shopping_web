<?php
// Database connection
session_start();
$host = 'localhost';
$db   = 'shopping';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$conn = mysqli_connect("localhost","root","","shopping");


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

// Login process
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
   $stmt->execute([$username]);
   $user = $stmt->fetch();
  
   if ($user && password_verify($password, $user['user_password'])) {
    $sql = "SELECT id FROM users where username =  $username and user_password = $password";
    $row = $conn->query($sql);
    $user_id = $row['id'];
    $_SESSION['user_id'] = $user_id;
    header('Location: http://localhost/e-comerce/index.php');
exit();

    
   } else {
       echo "Invalid username or password.";
   }
}
