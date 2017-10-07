<?php

function apiFunction(){
    $jsonResponse = array(array('name' => "lopesh", 'age' => 20, 'ocupation' => "coder", 'hobbies' => "cricket"),array('name' => "lopesh", 'age' => 20, 'ocupation' => "coder", 'hobbies' => "cricket"));
    return json_encode($jsonResponse);
}


function apiFunction1(){
    $jsonResponse = array(array('name' => "Nikhil", 'age' => 21, 'ocupation' => "hard coder", 'hobbies' => "cricket"),array('name' => "lopesh", 'age' => 20, 'ocupation' => "coder", 'hobbies' => "cricket"));
    return json_encode($jsonResponse);
}

include ('routeFunctions.php');
?>