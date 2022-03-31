<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){


$data = json_decode(file_get_contents('php://input'),true);
$sports_name=$data['sports_name'];
$sports_weight=$data['sports_weight'];
$category=$data['category'];
$user_participate_id=$data['user_participate_id'];



$sql="INSERT INTO `sport` (`sports_name`, `sports_weight`, `category`, `user_participate_id`) VALUES ('$sports_name', '$sports_weight', '$category', '$user_participate_id');";
$res = mysqli_query($conn,$sql);
// echo $sql;
if ($res){
    http_response_code(201);
    // $last_id=mysqli_insert_id($conn);
    echo json_encode(array("status"=>"true","message"=>"news added"));
}else {
    http_response_code();
    echo json_encode(array("status"=>"flse","message"=>"data not added"));

}
}
?>
