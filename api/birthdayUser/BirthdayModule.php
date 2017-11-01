<?php
//This Function Read The Date of Birth 
function readDateOfBirth(){
        include ('./DB/dbConnection.php'); 
        if(isset($_POST)){
                //$month = (string)$_POST['Month'];
                //$Months='%-'.$month.'-%';
                $Months='%-10-%';
                $sql ="Select * from samparkdata Where dob::text LIKE '$Months'";
                $result=pg_query($con,$sql);
                $results = array();
                if(pg_num_rows($result)>=0){ 
                        
                            while($row = pg_fetch_assoc($result))
                            {
                               $results[] = array( 
                                     "FirstName"=>$row['firstname'],
                                     "MiddleName"=>$row['middlename'],
                                     "LastName"=>$row['lastname'],    
                                     "DOB"=>$row['dob'] 
                               ); 
                        }
                        
                        
                } 
                echo json_encode($results) ;
               
                
               
            
                //echo $result;
                //print_r($results); 
        }    
}
include ("./createUser/routeFunctions.php")

?>