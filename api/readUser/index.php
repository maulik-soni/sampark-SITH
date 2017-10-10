<?php
include ('../DB/dbConnection.php');

    $sql ="Select * from samparkdata LIMIT 5";
    $result=mysqli_query($con,$sql);
    $results = array();


if(mysqli_num_rows($result)>0){ 
    
        while($row = mysqli_fetch_assoc($result))
        {
           $results[] = array(
             
                   "id" => $row['id'],
                   "refname" =>	$row['refname'],
                   "fullname" => $row['fullname'],
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
                    "attendence" =>   $row['attendence'], 
                    "followupname" => $row['followupname'] 
               
           );
        }
        }
        echo json_encode($results) ;
?>