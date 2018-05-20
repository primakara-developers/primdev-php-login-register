<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DAFTAR DULU</h1>
    <form action="register.php" method="POST">
        <p>Username : </p> <input type="text" name="username" required> <!-- Wajib Isi -->
        <p>Password : </p> <input type="password" name="password" required>
        <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun ? <a href="form_login.php">Masuk disini!</a></p>
</body>
</html>