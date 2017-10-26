<?php


include ('../DB/dbConnection.php');

if( isset($_GET['edit']) )
{
    $id = $_GET['edit'];
   
    $res= mysqli_query($con,"select * from samparkdata WHERE id='$id'");
    $row= mysqli_fetch_array($res);
}
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
    
    echo "<meta http-equiv='refresh' content='0;url=../../app/Template/read.html'>";                       
 mysqli_close($con);
}
?>

<html>
   
        <head>
           <!--<link rel="stylesheet" type="text/css" href="../vendor/style/bootstrap.min.css">-->
           <link rel="stylesheet" href="../../app/style/index.css">
           <script src="../../app/js/jquery-3.2.1.min.js"></script>
           <script src="../../app/js/index.js"></script>
          
        </head>
        <body>
        <form action="edit.php" method="POST">
                
                <table>
                    <tr>
                        <td>
                        <input type="hidden" name="id" value="<?php echo $row[0]; ?>"><br>
                            Reference Name: *
                        </td>
                        <td>
                            <input type='text' name='referenceName' value='<?php echo $row[1];?>' placeholder='Please Enter Name'/>
                        </td>  
                
                        <td id='invalidReferenceName' class="validationMessageClass">Please Enter Reference Name</td>
                    </tr>
                    <tr>
                        <td>
                             Full Name Name: *
                        </td>
                        <td>
                            <input type='text' name='fullName'value="<?php echo $row[2];?>"placeholder='Full Name' />
                        </td> 
                        <td id='invalidFirstName' class="validationMessageClass">Please Enter Full Name</td>
                    </tr> 
                   
    
                    <tr>
                        <td>
                            Nickname:    
                        </td> 
                        <td>
                                <input type='text' name='nickName' value="<?php echo $row[3]; ?>"placeholder='Nick Name'/>   
                        </td>  
                        <td id='invalidNickName' class="validationMessageClass">Please Enter Nick Name</td>  
                    </tr>
                    <tr>
                        <td>
                            Gender: *
                        </td>
                        <td>
                            <select name='gender' >
                                <option value="" selected> <?php echo $row[4]; ?></option>
                                <option value="Male"> male </option>
                                <option value="Female"> Female </option>
                            </select> 
                        </td> 
                        <td id='invalidGender' class="validationMessageClass">Please Select Gender</td>
                    </tr>
                    <tr>
                        <td>
                            Date Of Birth : *
                        </td>
                        <td>
                            <input type='date' name='DOB'value="<?php echo $row[5]; ?>" />
                        </td>
                        <td id='invalidDOB' class="validationMessageClass">Please Select DOB</td>
                    </tr>
                    <tr> 
                        <td>
                                Address: *
                        </td> 
                        <td>
                            <input type='text' name='address' value='<?php echo $row[6]; ?>' placeholder='Address' row='20' column='20'/>
                        </td>
                        <td id='invalidAddress' class="validationMessageClass">Please Enter Address</td> 
                    </tr>
                    <tr>
                        <td>
                            Mobile No: 
                        </td>
                        <td>
                            <input name='mobileNo' value='<?php echo $row[7]; ?>'placeholder='Mobile Number' type='number' /> 
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            Home Phone:
                        </td>
                            
                        <td>
                            
                            <input name='homePhoneNo'value="<?php echo $row[8]; ?>" placeholder='Home Phone Number' type='number'/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Office Phone Number: 
                        </td>
                        <td>
                                <input name='officePhoneNo'value="<?php echo $row[9]; ?>" placeholder='Office Phone Number' type='number'/>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            Email: 
                        </td>
                        <td>
                            <input name='emailId' value="<?php echo $row[10]; ?>" placeholder='Email Address' type='email'/>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Education Qualification : * 
                        </td> 
                        <td>
                            <input name='eduQualification' value='<?php echo $row[11]; ?>' placeholder='Education Qualification' type='text'/> 
                        </td>
                        <td id='invalideduQualification' class="validationMessageClass">Please Enter Education Qualification</td>
                    </tr>
                    <tr>
                        <td>
                            Major Subject: *
                        </td>
                        <td>
                            <input name='majorSubject'value='<?php echo $row[12]; ?>' type='Text' placeholder='Major Subject'/> 
                        </td>
                        <td id='invalidmajorSubject' class="validationMessageClass">Please Enter Major Subject</td>
                    </tr>
                    <tr>
                        <td>
                            Educational Status :    *
                        </td>
                        <td>
                            <input name='eduStatus' value="<?php echo $row[13]; ?>" placeholder='Educational status' type='Text'/> 
                        </td> 
                        <td id='invalideduStatus' class="validationMessageClass">Please Enter Major Subject</td>
                    </tr>
                    <tr>
                        <td>
                            Attending Sabha ?   *
                        </td>
                        <td>
                            <input name='attendance'value='<?php echo $row[14]; ?>' placeholder='Attending Sabha' type='text' /> 
                        </td>
                        <td id='invalidattendance' class="validationMessageClass">Please Enter Attendance</td>
                    </tr>
                    <tr>
                        <td> 
                            Select Sabha:   *
                        </td>
                        <td>
                            <select name='Sabha'value='<?php echo $row[16]; ?>'>
                                <option ><?php echo $row[16]; ?></option>
                                <option value='Ghatkopar'> Ghatkopar </option>
                                <option value='Bhandup'> Bhandup </option>
                                <option value='Mulund'> Mulund</option>
                                <option value='Dombivali'> Dombivali </option> 
                            </select>
                        </td> 
                        <td id='invalidsabhaPlace' class="validationMessageClass">Please Enter Sabha</td>
                    </tr>
                    <tr>
                        <td>
                            Follow Up Name: *  
                        </td>
                        <td>
                            <input type='text' name='followName' value='<?php echo $row[15]; ?>' placeholer='Select Followup'/> 
                        </td>
                        <td id='invalidfollowName' class="validationMessageClass">Please Enter Follow up Yuvak Name</td> 
                    </tr>
                    <tr>
                        <td>
                            <input  type='submit' value='update'/>  
                        </td> 
                    </tr>
                </table>
            </form> 
        </body> 
    </html>
