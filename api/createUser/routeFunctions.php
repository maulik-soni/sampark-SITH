<?php 
switch($_REQUEST['function']){
    case 'readUser':
      echo readUser();
      break;
  case 'createUser':
      echo createUser();  
      break; 

  case 'readDateOfBirth': 
        echo readDateOfBirth();
        break;    
  case 'updateUser':
      echo updateUser();  
      break;   
  case 'viewUser':
      echo viewUser();
      break;
  default:
      break;
}

?>