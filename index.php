<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "nathandark29200@gmail.com";
    $to = "bedikit429@biohorta.com";
    $subject = "Essai de PHP Mail";
    $message = "Quelqu'un a clicker sur le lien";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
?>