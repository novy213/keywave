<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Keywave</title>
    <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="styles/adminStyle.css">
</head>
<body>
<?php
$adminLoged = $_SESSION['admin'];
if($adminLoged==null){
    echo "
    <form method='post' id='loginForm'>
    <input type='password' name='password'>
    <input type='submit' name='zaloguj' value='zaloguj'>
</form>
    ";
}
else {
include 'php/db.php';
}
if(isset($_POST['zaloguj'])){
    include 'php/db.php';
    $password = $_POST['password'];
    $q = "select * from admin where password = SHA2(CONCAT('klucz', '$password'), 256);";
    $wynik = mysqli_fetch_row(mysqli_query($db,$q));
    if($wynik!=null){
        $_SESSION['admin'] = $wynik[0];
        echo "<script>
var form = document.getElementById('loginForm');

form.style.display = 'none';
</script>";
    }
    else echo "<script>alert('niepoprawne dane')</script>";
}
?>
<h1 style="width: 100%;text-align: center;color: white">Panel administratora</h1>

<div class="container">
    <div class="header">

    </div>
    <div class="content">
        <form method="post">
            <input type="button" value="Płatności" onclick="Platnosci()">
            <input type="button" value="Skiny" onclick="Skiny()">
            <input type="submit" name="wyloguj" value="Wyloguj">
        </form>
        <?php
        if(isset($_POST['wyloguj'])){
            $_SESSION['admin'] = null;
            echo "<script>location.href = './admin.php'</script>";
        }
        ?>
        <div class="Skiny" id="Skiny" style="display: none">
            <div class="MenuSkiny">

            </div>

        </div>
        <div class="Platnosci" id="Platnosci" style="display: none">
            <h1>Platnosci</h1>
        </div>
    </div>
</div>
<script src="javascript/adminJS.js"></script>
</body>
</html>