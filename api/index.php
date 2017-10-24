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
else{
     include ('./updateUser/index.php');
}
?>