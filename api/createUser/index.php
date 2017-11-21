<?php
    //leadername
    //This is the function to create User
    function createUser(){ 
            $imagepath="";
            $json = file_get_contents('php://input');
            $decoded = json_decode($json);

            //echo $decoded['data']['nickName'];
            if(isset($decoded)){
                if(is_object($decoded)){
                    $myDecode=get_object_vars($decoded);
                    print_r($myDecode['data']->nickName);

                }
                 
                /*$a=$_POST['data']; 
                $value = json_decode($a);
                if(isset($_FILES['file'])){
                    $sourcePath = $_FILES['file']['tmp_name'];
                    $targetPath = "../app/images/".$_FILES['file']['name'];
                    $imagepath="../images/".$_FILES['file']['name'];
                    move_uploaded_file($sourcePath,$targetPath);
                     
                }*/
                include ('DB/dbConnection.php') ;
                
                   $referenceName=$myDecode['data']->refName;
                   $firstName=$myDecode['data']->firstName;
                   $middleName=$myDecode['data']->middleName;
                  $lastName=$myDecode['data']->lastName;
                  $nickName=$myDecode['data']->nickName;
                  $gender=$myDecode['data']->gender;
                  $dob=$myDecode['data']->DOB;
                  $address=$myDecode['data']->address;
                  $mobileNo=$myDecode['data']->mobileNo;
                  $homeNo=$myDecode['data']->homeNo;
                  $officeNo=$myDecode['data']->officeNo;
                  $emailId=$myDecode['data']->email;
                  $qualification=$myDecode['data']->qualification;
                  $majorSubject=$myDecode['data']->majorsub;
                  $eduStatus=$myDecode['data']->eduStatus;
                  $attendance=$myDecode['data']->sabhaAttendance;
                  $sabhaPlace=$myDecode['data']->sabhaDetails;
                  $followupYuvakName=$myDecode['data']->followupYuvakName;
                  $leaderName=$myDecode['data']->leaderName; 
                  
                 
                  $query="INSERT INTO yuvak_data (
                  refname,
                  firstname,
                  middlename,
                  lastname,
                  nickname,
                  gender,
                  dob,
                  address,
                  mobileno,
                  homeno,
                  officeno,
                  email,
                  qualification,
                  majorsub,
                  edustatus,
                  attendance,
                  followup,
                  sabhaplace,
                  leadername,
                  yuvakimage 
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
                    
                    // print_r($decoded);
                    
            } 
            
            
        } 
    include ('routeFunctions.php');
?>