
<?php
function updateUser(){
    include ('DB/dbConnection.php');
   
    
    if(isset($_REQUEST['data'])){
       
        $a=($_POST['data']); 
        $value = json_decode($a);
      

    $id=$value->id;
    $rname=$value->referenceName;
    $fname=$value->firstName;
     $mname=$value->middleName;
    $lname=$value->lastName;
    $nname=$value->nickName;
   $gender=$value->gender;
   $dob=$value->DOB;
   $address=$value->address;
   $mno=$value->mobileNo;
   $homeno=$value->homePhoneNo;
   $officeno=$value->officePhoneNo;
   $email=$value->emailId;
   $qual=$value->eduQualification;
   $msub=$value->majorSubject;
   $edu=$value->eduStatus;
   $attendance=$value->attandance;
   $sabha=$value->Sabha;
   $followname=$value->followName;
   $leadername=$value->leadername; 
  
 
   echo $id;
   
    $sql ="UPDATE yuvak_data SET refname='$rname', firstname='$fname',middlename='$mname',lastname='$lname', nickname='$nname', gender='$gender', dob= '$dob',address= '$address', mobileno= '$mno', homeno='$homeno', officeno='$officeno', email='$email', qualification= '$qual', majorsub='$msub', edustatus='$edu', attendance='$attendance', followup= '$followname',sabhaplace='$sabha',leadername='$leadername' WHERE id='$id'";
    $reult1 =pg_query($con,$sql);
    echo "update";                       
 
 }
 else{
     echo "bye";
}
 }
include ("./createUser/routeFunctions.php")

    ?>