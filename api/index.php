<?php

if($_REQUEST['route'] == 'create'){
    include ('./createUser/index.php');
}
else if($_REQUEST['route'] == 'read'){
    include ('./readUser/index.php');
}
else if($_REQUEST['route'] == 'birthday'){
    include ('./birthdayUser/BirthdayModule.php');
} 
else if($_REQUEST['route'] == 'update'){
     include ('./updateUser/update.php');
}

?>