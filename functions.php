<?php
$success=true;
$message="ISCRIVITI ALLA NEWSLETTER";

    if(isset($_GET["email"])){
        $email = $_GET["email"];

        if((!str_contains($email, "@"))||(!str_contains($email, "."))){
            $success=false;
            $message="Formato email errato!";
        } else {
            $success=true;
            $message="Ti sei iscritto alla newsletter!";
        }    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="alert <?php echo $success? 'alert-success' : 'alert-danger';?>" role="alert">
        <?php echo $message; ?>
    </div>

</body>
</html>