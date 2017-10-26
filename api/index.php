<?php

if($_REQUEST['route'] == 'create'){
    include ('./createUser/index.php');
}
else if($_REQUEST['route'] == 'read'){
    include ('./readUser/index.php');
}
else{
     include ('./updateUser/index.php');
}

?>