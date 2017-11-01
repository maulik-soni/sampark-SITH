<?php 

switch($_REQUEST['function']){
    case 'readUser':
      echo json_encode(readUser());
      break;
    case 'createUser':
      echo createUser();  
      break; 
    case 'viewUser':
      echo viewUser();
      break;
    default:
      break;
}

?>