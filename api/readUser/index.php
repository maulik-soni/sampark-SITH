<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
function readUser(){
        include ('DB/dbConnection.php');
    $sql ="Select * from yuvak_data";
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

                    "imagepath"=>$row['yuvakimage'],
                    "occupation"=>$row['occupation']

                    

           );
        }
}
        return $results;
      
}
include ("./createUser/routeFunctions.php");
?>