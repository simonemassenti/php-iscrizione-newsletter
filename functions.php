<?php
    if(isset($_GET["email"])){
        $email = $_GET["email"];
        
        if((!str_contains($email, "@"))||(!str_contains($email, "."))){
            echo "Formato dell'email errato!";
        } else {
            echo "Ti sei iscritto alla newsletter!";
        }    
    }
    
?>
