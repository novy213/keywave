<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Keywave</title>
    <link rel="stylesheet" href="../styles/registerStyle.css">
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
    <div class="login">
        <button id="LoginButton">Login</button>
    </div>
</header>
<center>
    <div class="registerBox">
        <form method="post">
            <h1>Register</h1>
            <div class="password-field">
                <input type="text" placeholder="Name" id="NameInput" name="name">
            </div>
            <br>
            <div class="password-field">
                <input type="text" placeholder="Last name" id="NameInput" name="name">
            </div>
            <br>
            <div class="password-field">
                <button type="button">
                    <img src="http://localhost/img/mail.png" alt="mail" style="width: 25px;" id="mail">
                </button>
                <input type="email" placeholder="example@example.com" id="EmailInput" onchange="Email()" name="email">
            </div>
            <br>
            <div class="password-field">
                <button type="button">
                    <img onclick="Eye()" src="http://localhost/img/hide.png" alt="eye" style="width: 25px" id="eye">
                </button>
                <input type="password" placeholder="Password" id="PasswordInput" name="password">
            </div>
            <br><br>
            <input type="submit" value="Register">
        </form>
    </div>
</center>
<script  src="../javascript/registerJS.js"></script>
</body>
</html>