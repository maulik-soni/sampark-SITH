<?php
header("Access-Control-Allow-Origin: *");
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
else{
     include ('./updateUser/index.php');
}

?>