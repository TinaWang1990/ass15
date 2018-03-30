<?php 
require_once("database.php");

if ($_POST){
	$id=$_POST['productNmae'];
	$price=$_POST['price'];
	$db=new Database();
	$db->insertAItem($name,$price);
}
$db=new Database();
$all_items= $db->getAllItems();



 ?>