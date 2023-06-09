<?php
session_start();
include __DIR__ . '/functions.php';

/* $length = $_GET['length'];
$_SESSION['length'] = $length; */

$length = $_GET['length'];

$_SESSION['password_array'] = random_password($length);

if(isset($_GET['submitted'])){
    header('Location: ./newPassword.php');
} 



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
            
            <form method="get">
                <div class="row">
                    <div class="col-12">
                        <input class="form-control mb-2" type="text" name="length" id="length" placeholder="type the length of your new password in number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button name="submitted" type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                    <div class="col-6">
                        <button type="reset" class="btn btn-secondary w-100">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>