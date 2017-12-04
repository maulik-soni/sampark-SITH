<?php
    //leadername
    //This is the function to create User
    function createUser(){ 
$value="";
        $data = json_decode(file_get_contents("php://input"));
        print_r($_POST);
        echo "dfgf";
       if (isset($_POST['data'])){

$value=json_decode($_POST['data']);

       }
        // echo "gh";
       //print_r($data);
        $imagepath='';
            
           
            if(!empty($_FILES['image'])){
                $ext =$_FILES['image']['name'];
            
            $img="../appv2/img/".$ext;
            $imagepath="../appv2/img/".$ext;
                if (move_uploaded_file($_FILES['image']['tmp_name'],$img)) {
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
                 echo $firstName;

                  $query="INSERT INTO yuvak_data (firstname, middlename, lastname, nickname, gender, dob, address, mobileno, homeno, officeno, email, qualification, majorsub, edustatus, attendance, sabhaplace, followup,yuvakimage,leadername,refname) 
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
                    )"; 
  
     
                 echo "hd".$imagepath;

                
            
            
            
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