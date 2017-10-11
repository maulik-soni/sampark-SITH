<?php
    
    //This is the function to create User
    function createUser(){  
        include ('DB/dbConnection.php') ;
         if(isset($_GET)){
            $referenceName=$_GET['referenceName'];
            $fullName=$_GET['fullName'];
            $nickName=$_GET['nickName'];
            $gender=$_GET['gender'];
            $dob=$_GET['dob'];
            $address=$_GET['address'];
            $mobileNo=$_GET['mobileNo'];
            $homeNo=$_GET['homeNo'];
            $officeNo=$_GET['officeNo'];
            $emailId=$_GET['emailId'];
            $qualification=$_GET['qualification'];
            $majorSubject=$_GET['majorSubject'];
            $eduStatus=$_GET['eduStatus'];
            $attendance=$_GET['attendance'];
            $sabhaPlace=$_GET['sabhaPlace'];
            $followupYuvakName=$_GET['followupYuvakName']; 
            $query="INSERT INTO samparkdata (refname,fullname,nickname,gender,dob,address,mobile,home,office,email,qualification,majorsub,edustatus,attendence,followupname,SabhaPlace) VALUES ('$referenceName','$fullName','$nickName',' $gender','$dob','$address','$mobileNo','$homeNo','$officeNo','$emailId','$qualification','$majorSubject','$eduStatus','$attendance','$followupYuvakName','$sabhaPlace')"; 
            mysqli_query($con,$query); 
            mysqli_close($con);
            echo "Data Inserted Successfully";
         }
         
         
         
    } 
   
    include ('routeFunctions.php');
?>