<?php
    //leadername
    //This is the function to create User
    function createUser(){ 
        $value = json_decode(file_get_contents("php://input"));

        echo  $value->refName;
       // print_r($data);
        
           // $imagepath="";
            //if(isset($_POST['data'])){
                //echo 'hi';
                /*$a=$_POST['data']; 
                $value = json_decode($a);
                if(isset($_FILES['file'])){
                    $sourcePath = $_FILES['file']['tmp_name'];
                    $targetPath = "../app/images/".$_FILES['file']['name'];
                    $imagepath="../images/".$_FILES['file']['name'];
                    move_uploaded_file($sourcePath,$targetPath);
                     
                }*/
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
                 

                  $query="INSERT INTO yuvak_data (firstname, middlename, lastname, nickname, gender, dob, address, mobileno, homeno, officeno, email, qualification, majorsub, edustatus, attendence, sabhaplace, followup, leadername,refname) 
                  VALUES 
                    ('".$firstName."',
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
                     '".$sabhaPlace."',
                     '".$followupYuvakName."',
                     '".$leaderName."',
                     '".$referenceName."'
                    )"; 
  
     
                 

                
            
            
            
           // $query="INSERT INTO yuvak_data (firstname,middlename,lastname,nickname,gender,dob,address,mobileno,homeno,officeno,email,qualification,majorsub,edustatus,attendance,followup,sabhaplace,leadername) VALUES ($firstName','$middleName','$lastName','$nickName',' $gender','$dob','$address','$mobileNo','$homeNo','$officeNo','$emailId','$qualification','$majorSubject','$eduStatus','$attendance','$followupYuvakName','$sabhaPlace','$leaderName')"; 
           $sql=pg_query($con,$query); 
           if($sql){
              echo "Data Inserted Successfully";     
             }  
             else{

                echo "check query";
             } 

            pg_close($con);
            }
        
    
     

    include ('routeFunctions.php');
?>