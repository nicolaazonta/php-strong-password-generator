<?php 


function random_password(){

    $random_word_array = [];
    
    for ($i = 0; $i < $_SESSION['length']; $i++) {
        array_push($random_word_array, chr(rand(33,126)));
    }
    return $random_word_array;
}

?>