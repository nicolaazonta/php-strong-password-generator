<?php 
session_start();
/* $_SESSION['length']; */
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>php-strong-password-generator</title>
</head>

<body>

    <div class="container w-50 my-5">
        <div class="card shadow-lg p-3 mb-5 bg-dark text-light rounded">

            <div class="card-title text-center text-uppercase py-3">
                <h4>your portable password generator</h4>
            </div>
            <div class="alert alert-primary text-center" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>Here below you can see your new password!</p>
                <hr>
                <p class="mb-0"> 
                    <?php foreach ($_SESSION['password_array'] as $letter) : echo $letter; endforeach ?>
                </p>
            </div>
            
        </div>
    </div>


</body>

</html>