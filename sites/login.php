<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Keywave</title>
    <link rel="stylesheet" href="../styles/loginStyle.css">
</head>
<body>
<header>
    <div class="wavy">
        <span style="--i:1">K</span>
        <span style="--i:2">e</span>
        <span style="--i:3">y</span>
        <span style="--i:4">w</span>
        <span style="--i:5">a</span>
        <span style="--i:6">v</span>
        <span style="--i:7">e</span>
    </div>
    <div class="register">
        <p>Register</p>
    </div>
</header>
<center>
<div class="loginBox">
    <form method="post">
        <h1>Login</h1>
        <div class="password-field">
            <button type="button">
                <img src="../src/mail.png" alt="mail" style="width: 25px;" id="mail">
            </button>
            <input type="email" placeholder="example@example.com" id="EmailInput" onchange="Email()">
        </div>
        <br>
        <div class="password-field">
            <button type="button">
                <img onclick="Eye()" src="../src/visible.png" alt="eye" style="width: 25px" id="eye">
            </button>
            <input type="password" placeholder="Password" id="PasswordInput">
        </div>
        <br><br>
        <input type="submit" value="Login">
        <input type="button" id="ResetPassword" value="Forgot password?">
    </form>
<div class="login">
</center>
<script  src="../javascript/loginJS.js"></script>
</body>
</html>