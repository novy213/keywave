<?php
if(isset($_POST['email'])){
    include '../php/db.php';
    $db = mysqli_connect($servername, $username, $password, $dbname);
    $email = $_POST['email'];
    $code = rand(1000,9999);
    $q = "insert into reset_password values (null, '$email', '$code');";
    $wynik = mysqli_query($db, $q);
    if($wynik!=null){
        echo "Wysłano email";

        $from = 'Reset hasła - Keywave <kontakt.keywave@gmail.com>';

        $replyTo = 'Biuro <kontakt.keywave@gmail.com>';

        $subject = 'Kod do resetowania hasła - Keywave';

        $message = '
        <html>
        <head>
          <title>Reset hasła - Keywave</title>
        </head>
        <body>
          <h1>Dzień dobry!</h1>
          <hr>
          <p>Otrzymaliśmy prośbę dotyczącą zresetowania Twojego hasła na <a href="https://keywave.pl">Keywave</a>. <br>
            Wprowadź następujący kod resetowania hasła: <b>'.$code.'</b></p>
          <hr>        
          <br><br>
          <p>Nie prosiłeś o tę zmianę?<br>
Jeżeli prośba o nowe hasło nie została wysłana przez Ciebie, <a href="mailto:kontakt.keywave@gmail.com">skontaktuj się z nami</a></p>
        </body>
        </html>
    ';

        $headers  = 'MIME-Version: 1.0'."\r\n";
        $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
        $headers .= 'From: '.$from."\r\n";
        $headers .= 'Reply-To: '.$replyTo."\r\n";

        mail($email, $subject, $message, $headers);
    }
    else echo "Email nie został wysłany";
}
else{
    echo "Prosze wpisac email";
}
