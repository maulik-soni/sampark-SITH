<?php 

switch($_REQUEST['function']){
    case 'createUser':
        echo createUser();  
    break; 
}

?>