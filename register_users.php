<?php
require 'configuration/database.php';
$db = new Database();
$conn = $db->Get_connection();
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);

    if ($password !== $confirmPassword) {
        $error =  "Mật Khẩu Không Khớp!";
    } else {
        $password_Encryption = password_hash($password, PASSWORD_BCRYPT);

        // câu lệnh insert
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_Encryption);
        $stmt->execute();
    }
}
