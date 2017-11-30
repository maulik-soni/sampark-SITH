<?php 
    $con=pg_connect("host=localhost port=5432 dbname=sampark user=postgres password=root"); 
    $postdata=file_get_contents("php://input");
    $request=json_decode($postdata);
    $id=$request->data; 
    $result=pg_query($con,"select * from yuvak_data where id='$id'");
    $res = array(); 
    if(pg_num_rows($result)>0){ 
            while($row = pg_fetch_assoc($result))
            {
                $res[] = array(
                    
                   "id" => $row['id'],
                   "refname" =>	$row['refname'],
                   "firstname" => $row['firstname'],
                   "middlename" => $row['middlename'],
                   "lastname" => $row['lastname'],
                   "nickname" =>  $row['nickname'],
                   "gender" => $row['gender'],
                   "dob" => $row['dob'],
                   "address" =>  $row['address'],
                   "mobile" =>  $row['mobileno'],
                   "home" =>  $row['homeno'],
                   "office" =>  $row['officeno'],
                   "email" =>  $row['email'],
                    "qualification" =>    $row['qualification'],
                    "majorsub" =>    $row['majorsub'], 
                    "edustatus" =>   $row['edustatus'], 
                    "attendance" =>   $row['attendance'], 
                    "followupname" => $row['followup'],
                    "sabhaplace" => $row['sabhaplace'],
                    "leadername"=>$row['leadername'],
                    "occupation"=>$row['occupation'],
                     "imagepath"=>$row['yuvakimage']
                );

            } 
    }
    echo json_encode($res) ; 
    
?>