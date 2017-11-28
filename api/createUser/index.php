<?php
    //leadername
    //This is the function to create User
    function createUser(){ 
        $value = json_decode(file_get_contents("php://input"));
        print_r($_POST);
       
        // echo "gh";
       //print_r($data);
        
            
           
            if(!empty($_FILES['image'])){
                $ext =$_FILES['image']['tmp_name'];
               /* $targetpath="img/";
                       
                        move_uploaded_file($ext,$targetpath );
                 $imgpath="img/".$ext;       
                echo "Image uploaded successfully as ".$targetpath;
            }else{
                echo "Image Is Empty";
            }*/
            if (move_uploaded_file($_FILES['image']['tmp_name'],'../img/'.$ext)) {
                echo "Uploaded";
            } else {
               echo "File was not uploaded";
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
                 

                  /*$query="INSERT INTO yuvak_data (firstname, middlename, lastname, nickname, gender, dob, address, mobileno, homeno, officeno, email, qualification, majorsub, edustatus, attendence, sabhaplace, followup,yuvakimage,leadername,refname) 
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
                     '".$imagepath."',
                     '".$leaderName."',
                     '".$referenceName."'
                    )"; */
  
     
                 

                
            
            
            
        //    // $query="INSERT INTO yuvak_data (firstname,middlename,lastname,nickname,gender,dob,address,mobileno,homeno,officeno,email,qualification,majorsub,edustatus,attendance,followup,sabhaplace,leadername) VALUES ($firstName','$middleName','$lastName','$nickName',' $gender','$dob','$address','$mobileNo','$homeNo','$officeNo','$emailId','$qualification','$majorSubject','$eduStatus','$attendance','$followupYuvakName','$sabhaPlace','$leaderName')"; 
           $sql=pg_query($con,$query); 
           if($sql){
              echo "Data Inserted Successfully";     
             }  
             else{

                echo "check query";
             } 

            pg_close($con);
            }
        
    
        }

    include ('routeFunctions.php');
?>