<?php

/*echo "Dear SunnyFuture, have a good time.";*/

$fname=$_POST['name'];
$city=$_POST['city'];
$response = array(
	"name"=>$fname,
	"city"=>$city,
	"sentence"=>"Dear ".$fname.", have a good time in ".$city."!"
);
echo json_encode($response);

