<?php

/*echo "Dear SunnyFuture, have a good time.";*/

// $fname=$_POST['name'];
// $city=$_POST['city'];
// $response = array(
// 	"name"=>$fname,
// 	"city"=>$city,
// 	"sentence"=>"Dear ".$fname.", have a good time in ".$city."!"
// );
// echo json_encode($response);

$username=$_POST['username'];
$password=$_POST['password'];

if($username==""&&$password==""){
	$str='It is not completed!';
}else{
	$str='It is completed successful!';
}

header("Access-Control_Allow-Origin:*");
header("Content-Type: application/json; charset=UTF-8");

$response=array(
	"message"=>$str,
	
);
echo json_encode($response);