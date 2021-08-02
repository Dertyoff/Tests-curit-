<p>TU tes fait avoir !</p>
<html>
    <head>
        <title>MA PAGE</title>
        <p>TU tes fait avoir !</p>
        <meta charset="UTF" />
    </head>
    <body>
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
    </body>
</html>