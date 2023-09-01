<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Keywave</title>
    <link rel="stylesheet" href="../styles/restoreStyle.css">
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
    <div class="login">
        <button id="RegisterButton">Register</button>
    </div>
</header>
<center>
    <div class="restoreBox">
        <form method="post">
            <h1>Restore  password</h1>
            <div class="password-field">
                <button type="button" id="EmailSendButton" onclick="EmailSend(true)">
                    <label for="mail" id="LabelForMail">Send mail</label>
                    <img src="http://localhost/img/mail.png" alt="mail" style="width: 25px;" id="mail">
                </button>
                <input type="email" placeholder="example@example.com" id="EmailInput" onchange="Email()" name="email">
            </div>
            <br>
            <div class="password-field">
                <input type="text" placeholder="Kod weryfikacyjny" name="code">
            </div>
            <br>
            <br><br>
            <input type="submit" value="Change password" name="submit">
        </form>
        <?php
        include '../php/db.php';
        if(isset($_POST['submit'])){
            $code = $_POST['code'];
            $q = "select * from reset_password where code='$code';";
            $wynik = mysqli_fetch_row(mysqli_query($db, $q));
            if($wynik!=null) {
                $_SESSION['email'] = $wynik[1];
                echo "<script>location.href = './resetPassword.php';</script>";
            }
            else{
                echo "<script>alert('Niepoprawny kod weryfikacyjny')</script>";
            }
        }
        ?>
    </div>
</center>
<script  src="../javascript/restoreJS.js"></script>
</body>
</html>