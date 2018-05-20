<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:form_login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <p>Halo <?php echo $_SESSION['username'] ?>, Anda sudah berhasil login</p>
    <a href="logout.php">Logout</a>
</body>
</html>