<?php
 session_start();
 
 $email = $_SESSION["email"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GRAZIE PER ESSERTI ISCRITTO!</h1>
    <h3>La tua email <?php echo $email ?> è stata registrata con successo!</h3>
</body>
</html>