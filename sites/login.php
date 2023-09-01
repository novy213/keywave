<?php
session_start();
if(isset($_SESSION['loged'])){
    header('Location: '.'../index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Keywave</title>
    <link rel="stylesheet" href="../styles/loginStyle.css">
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
<div class="loginBox">
    <form method="post">
        <h1>Login</h1>
        <div class="password-field">
            <button type="button">
                <img src="../img/mail.png" alt="mail" style="width: 25px;" id="mail">
            </button>
            <input type="email" placeholder="example@example.com" id="EmailInput" onchange="Email()" name="email">
        </div>
        <br>
        <div class="password-field">
            <button type="button">
                <img onclick="Eye()" src="../img/hide.png" alt="hide" style="width: 25px" id="eye">
            </button>
            <input type="password" placeholder="Password" id="PasswordInput" name="password">
        </div>
        <br><br>
        <input type="submit" value="Login" name="submit">
        <input type="button" id="ResetPassword" value="Forgot password?">
        <div class="registerBox">
            <p style="color: white; font-size: 20px">Or Sing Up Using</p>
            <input type="button" id="Register" value="SING UP">
        </div>
    </form>
    <?php
    include '../php/db.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $q = "select * from user where email='$email' && password = SHA2(CONCAT('klucz', '$password'), 256);";
        $wynik = mysqli_query($db, $q);
        if($wynik!=null){
            $_SESSION['loged'] = mysqli_fetch_row($wynik)[0];
            echo "<script>location.href = '../index.php';</script>";
        }
        mysqli_close($db);
    }
    ?>
</div>
</center>
<script  src="../javascript/loginJS.js"></script>
</body>
</html>