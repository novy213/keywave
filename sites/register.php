<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Keywave</title>
    <link rel="stylesheet" href="../styles/registerStyle.css">
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
    <div class="registerBox">
        <form method="post">
            <h1>Register</h1>
            <div class="password-field">
                <input type="text" placeholder="Name" id="NameInput" name="name" required="required">
            </div>
            <br>
            <div class="password-field">
                <input type="text" placeholder="Last name" id="NameInput" name="last_name" required="required">
            </div>
            <br>
            <div class="password-field">
                <button type="button">
                    <img src="../img/mail.png" alt="mail" style="width: 25px;" id="mail">
                </button>
                <input type="email" placeholder="example@example.com" id="EmailInput" onchange="Email()" name="email" required="required">
            </div>
            <br>
            <div class="password-field">
                <button type="button">
                    <img onclick="Eye()" src="../img/hide.png" alt="hide" style="width: 25px" id="eye">
                </button>
                <input type="password" placeholder="Password" id="PasswordInput" name="password" required="required">
            </div>
            <br><br>
            <input type="submit" value="Register" name="submit">
            <div class="Login">
                <p>Have already an account? <a href="login.php">Login here!</a></p>
            </div>
        </form>
        <?php
        include '../php/db.php';
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $q = "insert into user values(null, '$name', '$last_name','$email', SHA2(CONCAT('klucz', '$password'), 256));";
            $wynik = mysqli_query($db, $q);
            mysqli_close($db);
            echo "<script>location.href = './login.php';</script>";
        }
        ?>
    </div>
</center>
<footer>
    &copy; 2023 keywave.pl - Wszelkie prawa zastrzeżone. <a href="./statute.php">Regulamin</a>
</footer>
<script  src="../javascript/registerJS.js"></script>
</body>
</html>