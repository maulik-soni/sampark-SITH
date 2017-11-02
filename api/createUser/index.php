<?php
    //leadername
    //This is the function to create User
    function createUser(){ 
            $imagepath="";
            if(isset($_POST['data'])){
                $a=$_POST['data']; 
                $value = json_decode($a);
                if(isset($_FILES['file'])){
                    $sourcePath = $_FILES['file']['tmp_name'];
                    $targetPath = "../app/images/".$_FILES['file']['name'];
                    $imagepath="../images/".$_FILES['file']['name'];
                    move_uploaded_file($sourcePath,$targetPath);
                     
                }
                include ('DB/dbConnection.php') ;
                
                   $referenceName=$value->refName;
                   $firstName=$value->firstName;
                   $middleName=$value->middleName;
                  $lastName=$value->lastName;
                  $nickName=$value->nickName;
                  $gender=$value->gender;
                  $dob=$value->DOB;
                  $address=$value->address;
                  $mobileNo=$value->mobileNo;
                  $homeNo=$value->homeNo;
                  $officeNo=$value->officeNo;
                  $emailId=$value->email;
                  $qualification=$value->qualification;
                  $majorSubject=$value->majorSub;
                  $eduStatus=$value->eduStatus;
                  $attendance=$value->sabhaAttendance;
                  $sabhaPlace=$value->sabhaDetails;
                  $followupYuvakName=$value->followupYuvakName;
                  $leaderName=$value->leaderName; 
                  
                 
                  $query="INSERT INTO samparkdata (
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
                  leadername,
                  imagepath 
                  ) VALUES 
                  (
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
                  '".$leaderName."',
                  '".$imagepath."'
                  )"; 
                 
                  $sql=pg_query($con,$query); 
                  if($sql){
                     echo "Data Inserted Successfully"; 
                      
                    }   
                   pg_close($con);
                
            }
            
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
            $query="INSERT INTO yuvak_data (refname,firstname,middlename,lastname,nickname,gender,dob,address,mobileno,homeno,officeno,email,qualification,majorsub,edustatus,attendance,followup,sabhaplace,leadername) VALUES ('$referenceName','$firstName','$middleName','$lastName','$nickName',' $gender','$dob','$address','$mobileNo','$homeNo','$officeNo','$emailId','$qualification','$majorSubject','$eduStatus','$attendance','$followupYuvakName','$sabhaPlace','$leaderName')"; 
            pg_query($con,$query); 
            pg_close($con);
            echo "Data Inserted Successfully"; 
             
        } 
    } 

    include ('routeFunctions.php');
?>