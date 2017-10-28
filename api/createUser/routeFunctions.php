<?php 
switch($_REQUEST['function']){
  case 'readUser':
      echo readUser();
      break;
  case 'createUser':
      echo createUser();  
      break; 
  case 'updateUser':
      echo updateUser();  
      break;   
  default:
      break;
}

?>