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
echo "<p>Admin zalogowany</p>";
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
<div class="container">
    <div class="header">

    </div>
    <div class="content">
        <form method="post">
            <input type="submit" name="wyloguj">
        </form>
        <?php
        if(isset($_POST['wyloguj'])){
            $_SESSION['admin'] = null;
            echo "<scirpt>location.href = './admin.php'</scirpt>";
        }
        ?>
    </div>
</div>
</body>
</html>