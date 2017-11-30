<?php
header ("content-type: application/json; charset=utf-8");
if($_REQUEST['route'] == 'create'){
    include ('./createUser/index.php');
}
else if($_REQUEST['route'] == 'read'){
    include ('./readUser/index.php');
}
else if($_REQUEST['route'] == 'view'){
    include ('./readUser/view.php');
}

else if($_REQUEST['route'] == 'birthday'){
    include ('./birthdayUser/BirthdayModule.php');
} 
else if($_REQUEST['route'] == 'update'){
     include ('./updateUser/update.php');
}
else{
    include ('./updateUser/index.php');}

?>