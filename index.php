<?php

$length = $_GET['length'];
//echo $length;

$random_word_array = [];

for ($i = 0; $i < $length; $i++) {
    array_push($random_word_array, chr(rand(97, 122)));
}

/* foreach ($random_word_array as $letter) {
    echo $letter;
} */

/* $password =  getRandomWord(); */
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
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="alert alert-primary text-center" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>Here below you can see your new password!</p>
                <hr>
                <p class="mb-0"> 
                    <?php foreach ($random_word_array as $letter) : echo $letter; endforeach ?>
                </p>
            </div>
            <form method="get">
                <div class="row">
                    <div class="col-12">
                        <input class="form-control mb-2" type="text" name="length" id="length" placeholder="type the length of your new password in number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
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