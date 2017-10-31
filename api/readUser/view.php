<?php
include ('../DB/dbConnection.php');

if( isset($_POST['mydata']) )
{
    $id = $_POST['mydata'];
    $sql= "select * from sampark WHERE id='$id'";
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
                "mobile" =>  $row['mobile'],
                "home" =>  $row['home'],
                "office" =>  $row['office'],
                "email" =>  $row['email'],
                 "qualification" =>    $row['qualification'],
                 "majorsub" =>    $row['majorsub'], 
                 "edustatus" =>   $row['edustatus'], 
                 "attendance" =>   $row['attendance'], 
                 "followupname" => $row['followupname'],
                 "sabhaplace" => $row['sabhaplace'],
                 "leadername"=>$row['leadername'],
                 "imagepath"=>$row['imagepath'],
                 "age"=>$row['age']
               );
            
            }
            
        }
        echo json_encode($res) ;  
        
}


?>

