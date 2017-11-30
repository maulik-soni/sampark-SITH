<?php
include ('../DB/dbConnection.php');

if( isset($_GET['edit']) )
{
    $id = $_GET['edit'];
    
    $res= mysqli_query($con,"select * from samparkdata WHERE id='$id'");
    $row= mysqli_fetch_array($res);
}
?>

<html>
    <head>
       <!--<link rel="stylesheet" type="text/css" href="../vendor/style/bootstrap.min.css">-->
       <link rel="stylesheet" href="../style/index.css">
       <script src="../vendor/js/jquery-3.2.1.min.js"></script>
       <script src="../js/index.js"></script>
        
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
                        <textarea  name='address' value='<?php echo $row[6]; ?>' placeholder='Address' row='20' column='20'></textarea>
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
                        <select name='Sabha'>
                            <option value='<?php echo $row[16]; ?>'><?php echo $row[16]; ?></option>
                            <option value='Ghatkopar'> Ghatkopar </option>
                            <option value='Bhandup'> Bhandup </option>s
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
                        <input id='btnAdd1' type='submit' value='update'/>  
                    </td> 
                </tr>
            </table>
        </form> 
    </body> 
</html>