<?php
session_start();
$email = $_SESSION['email'];
if($email==null){
    echo "<script>location.href = './restorePassword.php';</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/resetStyle.css">
    <title>Reset password - Keywave</title>
    <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
</head>
<body>
<center>
<div class="wavy">
    <span style="--i:1">K</span>
    <span style="--i:2">e</span>
    <span style="--i:3">y</span>
    <span style="--i:4">w</span>
    <span style="--i:5">a</span>
    <span style="--i:6">v</span>
    <span style="--i:7">e</span>
</div>
<div class="resetBox">
    <form method="post">
        <h1>Reset  password</h1>
        <div class="password-field">
            <input type="text" placeholder="Password" name="password">
        </div>
        <br>
        <div class="password-field">
            <input type="text" placeholder="Re-type password" name="rePassword">
        </div>
        <br>
        <br><br>
        <input type="submit" value="Change password" name="submit">
    </form>
    <?php
    include '../php/db.php';
    if(isset($_POST['submit'])) {
        $pas = $_POST['password'];
        $repas = $_POST['rePassword'];
        if ($pas == $repas) {
            $q = "update user set password=SHA2(CONCAT('klucz', '$pas'), 256) where email='$email';";
            $q2 = "delete from reset_password where email='$email';";
            $wynik = mysqli_query($db, $q);
            $wynik2 = mysqli_query($db, $q2);
            if ($wynik == 1 && $wynik2 == 1) {
                $_SESSION['email'] = null;
                echo "<script>alert('Hasło zostało zmienione poprawnie');location.href = './login.php';</script>";
            } else echo "<script>alert('Spróbuj ponownie później');location.href = './login.php';</script>";
        }
    }
    ?>
</div>
</center>
<footer>
    &copy; 2023 keywave.pl - Wszelkie prawa zastrzeżone. <a href="./statute.php">Regulamin</a>
</footer>
</body>
</html>