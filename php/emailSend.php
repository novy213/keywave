<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $db = mysqli_connect('localhost','root','admin','keywave');
    $code = rand(1000,9999);
    $q = "insert into reset_password values (null, $email, $code);";
    $wynik = mysqli_query($db, $q);
    if($wynik!=null){
        echo "Wysłano email";
    }
    else echo "Email nie został wysłany";
}
else{
    echo "Prosze wpisac email";
}
