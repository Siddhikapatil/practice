<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $res=mysqli_query($conn,'select * from `data`');
    $result=mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode(array("status"=>"true","message"=>"data found", "data"=>$result));
}


?>