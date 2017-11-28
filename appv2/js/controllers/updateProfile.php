<?php 
    $con=pg_connect("host=localhost port=5432 dbname=sampark user=postgres password=root"); 
    $postdata=file_get_contents("php://input");
    $request=json_decode($postdata);
    $id=$request->data->editid;
    $refname=$request->data->editrefName;
    $firstname=$request->data->editfirstName;
    $middlename=$request->data->editmiddleName;
    $lastname=$request->data->editlastName;
    $nickname=$request->data->editnickName;
    $dob=$request->data->editdate;
    $address=$request->data->editaddress;
    $mobNo=$request->data->editmbNo;
    $homeNo=$request->data->edithmNo;
    $officeNo=$request->data->editofNo;
    $email=$request->data->editemail;
    $qualification=$request->data->editqual;
    $majorsub=$request->data->editmsub;
    $edustatus=$request->data->editedustatus;
    $attendence=$request->data->editattend; 
    $leadername=$request->data->editlname;
    $followname=$request->data->editfollowUp;
    $gender=$request->data->editgender;
    $occupation=$request->data->editoccupation;
    $sabhaplace=$request->data->editsabha;
    $sql ="UPDATE yuvak_data SET refname='$refname', firstname='$firstname',middlename='$middlename',lastname='$lastname', nickname='$nickname', gender='$gender', dob= '$dob',address= '$address', mobileno= '$mobNo', homeno='$homeNo', officeno='$officeNo', email='$email', qualification= '$qualification', majorsub='$majorsub', edustatus='$edustatus', attendance='$attendence', followup= '$followname' ,leadername='$leadername',occupation= '$occupation',sabhaplace='$sabhaplace' WHERE id='$id'";    
    $query=pg_query($con,$sql);
    if($query){
        echo "Data inserted Successfully";
    }
?>