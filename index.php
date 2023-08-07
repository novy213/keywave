<?php
session_start();
if(isset($_SESSION['loged'])){

}
else{
    header('Location: '.'/sites/login.php');
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keywave</title>
</head>
<body>
<?php
echo $_SESSION['loged'];
?>
<form method="post">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    session_destroy();
}
?>
</body>
</html>