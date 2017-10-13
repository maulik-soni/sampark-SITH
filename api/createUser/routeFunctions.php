<?php 

switch($_REQUEST['function']){
    case 'readUser':
        echo readUser();
        break; 
}

?>