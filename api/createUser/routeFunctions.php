<?php 

switch($_REQUEST['function']){
    case 'apiFunction':
        echo apiFunction();
        break;
    case 'apiFunction1':
        echo apiFunction1();
        break;
}

?>