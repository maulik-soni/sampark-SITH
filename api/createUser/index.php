<?php
    //leadername
    //This is the function to create User
    function createUser(){  
         include ('DB/dbConnection.php') ;
         if(isset($_GET)){
             
            
            $referenceName=$_GET['referenceName'];
            $firstName=$_GET['firstName'];
            $middleName=$_GET['middleName'];
            $lastName=$_GET['lastName'];
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
            $leaderName=$_GET['leaderName']; 
            $query="INSERT INTO samparkdata (id,
            refname,
            firstname,
            middlename,
            lastname,
            nickname,
            gender,
            dob,
            address,
            mobile,
            home,
            office,
            email,
            qualification,
            majorsub,
            edustatus,
            attendence,
            followupname,
            sabhaplace,
            leadername) VALUES 
            (DEFAULT,
            '".$referenceName."',
            '".$firstName."',
            '".$middleName."',
            '".$lastName."',
            '".$nickName."',
            '".$gender."',
            '".$dob."',
            '".$address."',
            '".$mobileNo."',
            '".$homeNo."',
            '".$officeNo."',
            '".$emailId."',
            '".$qualification."',
            '".$majorSubject."',
            '".$eduStatus."',
            '".$attendance."',
            '".$followupYuvakName."',
            '".$sabhaPlace."',
            '".$leaderName."')"; 
            $sql=pg_query($con,$query); 
            if($sql){
               echo "Data Inserted Successfully"; 
                
              }   
            pg_close($con); 
        } 
    } 

    include ('routeFunctions.php');
?>