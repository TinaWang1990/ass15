<?php 
// $name=$_POST['name'];
// $city=$_POST['city'];

// $response=array(
// 	'name' => $name,
// 	'city' => $city,
// 	'sentence' => "Dear ".$name.", have a good time in ".$city."!"
// );
// //print_r($response);
// echo json_encode($response);


$host='127.0.0.1';
$db ='my2';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  
];
try{
	$pdo = new PDO($dsn, $user, $pass, $opt);
	$stmt_5 = $pdo->query("SELECT SN, CN, G from S, C, SC WHERE S.`S#`=SC.`S#` AND C.`C#`= SC.`C#` AND S.SA=18");
	while($row = $stmt_5->fetch()){

	echo $row['SN']." ".$row['CN']." ".$row['G']."\n";
}}
catch(PDOException $e){

	//roll back the transaction.
	/*$pdo->rollback();*/

	echo "Connection failed: " . $e->getMessage();
}

 ?>
