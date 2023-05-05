<?php 

function random_password(){

    $length = $_GET['length'];
    
    $random_word_array = [];
    
    for ($i = 0; $i < $length; $i++) {
        array_push($random_word_array, chr(rand(33,126)));
    };
    return $random_word_array;
};

?>