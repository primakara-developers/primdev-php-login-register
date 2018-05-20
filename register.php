<?php 
    $host = 'localhost';
    $username = 'root'; // username untuk database
    $password = ''; // password untuk database
    $database = 'primakara'; // nama database yang ingin digunakan

    $connect = mysqli_connect($host, $username, $password, $database); // cara mengkoneksikan database

    $dataUsername = $_POST['username'];
    $dataPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $mysqlCode = "INSERT INTO users(username, password) values('$dataUsername', '$dataPassword')";

    $execute = mysqli_query($connect, $mysqlCode);

    if ($execute) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }
?>