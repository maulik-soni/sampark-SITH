<?php
function readUser(){
        include ('DB/dbConnection.php');
    $sql ="Select * from samparkdata";
    $result=pg_query($con,$sql);
    $results = array();


        if(pg_num_rows($result)>0){ 
    
        while($row = pg_fetch_assoc($result))
        {
           $results[] = array(
             
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
                    "leadername"=>$row['leadername']
           );
        }
}
        echo json_encode($results) ;
        //print_r($results);
      //echo "ABC";
}
include ("./createUser/routeFunctions.php");
?>