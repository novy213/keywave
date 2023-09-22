<?php
session_start();
if(isset($_SESSION['loged'])){
    include 'php/db.php';
}
else{
    header('Location: '.'/sites/login.php');
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/indexStyle.css">
    <title>Keywave</title>
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
    <div class="container">
        <form method="post">
            <button class="Logout" id="MarketplaceButton">Marketplace</button>
            <button class="Logout" id="WymianaButton">Wymiana live</button>
            <button class="Logout" id="KontoButton">Moje konto</button>
        </form>
        <div class="Marketplace">
            <h1 style="color: #fff">Marketplace</h1>
        </div>
        <div class="WymianaLive" style="display: none">
            <h1 style="color: #fff">Wymiana live</h1>
        </div>
        <div class="MojeKonto" style="display: none">
            <h1 style="color: #fff">Moje konto</h1>
        </div>
    </div>
</center>
<?php
echo $_SESSION['loged']."<br>";
$q = "select * from user;";
$userInfo = mysqli_fetch_row(mysqli_query($db,$q));
echo "witaj ".$userInfo[1]." ".$userInfo[2]."<br>";
?>
<form method="post">
    <input type="submit" name="submit" value="Wyloguj">
</form>
<?php
/*if(isset($_POST['submit'])){
    session_destroy();
}*/
?>
<script src="javascript/indexJS.js"></script>
</body>
</html>