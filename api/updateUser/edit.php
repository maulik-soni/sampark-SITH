<?php
function editUser(){
include ('DB/dbConnection.php');

if( isset($_POST['mydata']) )
{
    $id = $_POST['mydata'];
  
    $sql= "select * from yuvak_data WHERE id='$id'";
    $result=pg_query($con,$sql);

    $res = array();
    
    
         
    if(pg_num_rows($result)>0){ 
            while($row = pg_fetch_assoc($result))
            {
                  
               $res[] = array(
                "id" => $row['id'],
                "refname" =>	$row['refname'],
                "firstname" => $row['firstname'],
                "middlename" => $row['middlename'],
                "lastname" => $row['lastname'],
                "nickname" =>  $row['nickname'],
                "gender" => $row['gender'],
                "dob" => $row['dob'],
                "address" =>  $row['address'],
                "mobile" =>  $row['mobileno'],
                "home" =>  $row['homeno'],
                "office" =>  $row['officeno'],
                "email" =>  $row['email'],
                 "qualification" =>    $row['qualification'],
                 "majorsub" =>    $row['majorsub'], 
                 "edustatus" =>   $row['edustatus'], 
                 "attendance" =>   $row['attendance'], 
                 "followupname" => $row['followup'],
                 "sabhaplace" => $row['sabhaplace'],
                 "leadername"=>$row['leadername'],
                 "imagepath"=>$row['yuvakimage']
               );
            
            }
            
        }
        echo json_encode($res) ;   
}

}
include ("./createUser/routeFunctions.php")
?>

