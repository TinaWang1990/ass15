<?php 
$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password){
	$c="root";
	$d="root";
	$response=array();

	if($username=$c&&$password=$d){
		$response=array(
			"res"=>"success"
		);
	}else{
		$response=array(
			"res"=>"failed"
		);
	}
	echo json_encode($response);
}else{
//why??
}

header("Access-Control_Allow-Origin:*");
header("Content-Type: application/json; charset=UTF-8");





 ?>