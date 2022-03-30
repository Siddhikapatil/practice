<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){


$data = json_decode(file_get_contents('php://input'),true);
$firstname=$data['firstname'];
$lastname=$data['lastname'];
$city=$data['city'];
$stream=$data['stream'];
$roll=$data['roll'];
$gender=$data['gender'];
$coursename=$data['coursename'];


$sql="INSERT INTO `data` (`firstname`, `lastname`, `city`, `stream`, `roll`, `gender`, `coursename`) VALUES ('$firstname', '$lastname', '$city', '$stream', '$roll', '$gender', '$coursename');";
$res = mysqli_query($conn,$sql);
// echo $sql;
if ($res){
    http_response_code(201);
    // $last_id=mysqli_insert_id($conn);
    echo json_encode(array("status"=>"true","message"=>"news added"));
}
}
?>
