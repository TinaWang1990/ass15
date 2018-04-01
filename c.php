<?php 
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



 ?>