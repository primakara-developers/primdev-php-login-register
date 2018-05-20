<?php
    session_start();

    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $dataUsername = $_POST['username'];
    $dataPassword = $_POST['password'];

    $mysqlCode = "SELECT * FROM users WHERE username = '$dataUsername'";

    $execute = mysqli_query($connect, $mysqlCode);
    
    $result = mysqli_fetch_assoc($execute);
    
    if (count($result['username']) > 0) {
        if (password_verify($dataPassword, $result['password'])) {
            $_SESSION['username'] = $result['username'];
            header("location:home.php");
        } else {
            echo "Username atau password salah";
        }
    } else {
        echo "Username atau password salah";
    }
?>