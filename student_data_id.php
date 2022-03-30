<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $stud_id=$_GET['Id'];
    $res=mysqli_query($conn,"select * from `data` where Id='$stud_id'");
    $result=mysqli_fetch_all($res,MYSQLI_ASSOC);
    $num=mysqli_num_rows($res);
    if($num>0){
        echo json_encode(array("status"=>"true","message"=>"data found", "data"=>$result));

    }else{
        echo json_encode(array("status"=>"false","message"=>"data noy found"));

    }
}



?>