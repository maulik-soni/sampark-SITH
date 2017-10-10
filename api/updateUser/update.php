
<?php

include ('../DB/dbConnection.php');
if( isset($_POST['referenceName']) )
{
    $rname = $_POST['referenceName'];
   
       $id  = $_POST['id'];
    $fname=$_POST['fullName'];
    $nname=$_POST['nickName'];
    $gender=$_POST['gender'];
    $email=$_POST['emailId'];
    $dob=$_POST['DOB'];
    $address=$_POST['address'];
    $mno=$_POST['mobileNo'];
   $homeno=$_POST['homePhoneNo'];
   $officeno=$_POST['officePhoneNo'];
   $msub=$_POST['majorSubject'];
   $qual=$_POST['eduQualification'];
   $edu=$_POST['eduStatus'];
   $sabha=$_POST['Sabha'];
   $followName=$_POST['followName'];
  
    $sql     = "UPDATE samparkdata SET refname='$rname', fullname='$fname', nickname='$nname', gender='$gender', dob= '$dob',address= '$address', mobile= '$mno', home='$homeno', office='$officeno', email='$email', qualification= '$qual', majorsub='$msub', edustatus='$edu', attendence= '$sabha', followupname= '$followName'  WHERE id='$id'";
    $res 	 = mysqli_query($con,$sql);
    echo "<meta http-equiv='refresh' content='0;url=../app/Template/read.html'>";                       
 mysqli_close($con);
}
else{
    echo "bye";
}


    ?>