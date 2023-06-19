<?php

    $name = $_POST['ime'];
    $surname = $_POST['prezime'];
    $mailfrom = $_POST['email'];
    $message = $_POST['poruka'];

    $to = "marijaamarkovic21@gmail.com";
    $subject = "Mejl sa Oliveti sajta!";
   
    $txt = "\n Od:" . $name ." ". $surname .".\n\n". $message;
    $headers = "Poruka od \n". $mailfrom;

    if($mailfrom != NULL){
    mail($to, $subject, $surname, $headers, $txt);
    }
    header("Location: thanks.html");


?>