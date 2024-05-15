
<?php

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :email");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    $existingUser = $stmt->fetch();

    if ($existingUser) {

        header('Location: signup.php?exist=1');
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {

            header('Location: login.php');
            exit();
        } else {

            header('Location: register.php?error=1');
        }
    }
}

$conn = null;
?>

