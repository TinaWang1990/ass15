<?php 

class DataBase{
	private $connection;

	private function getConnected(){
		if(!$this->connection){
			$this->connection=new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
		}else{
			$pdo=new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
			$this->connection=$pdo;
		}
	}

	public function getAllItems(){
		$this->getConnected();
		$sql="SELECT * FROM Q4";
		$stmt=$this->connection->query($sql);
		$result=$stmt->fetchAll(PDO:FETCH_ASSOC);
		return $result;
	}

	public function deleteItem($id){
		$this->getConnected();
		$sql="DELETE FROM Q4 WHERE item_num=:id";
		$stmt=$this->connection->prepare($sql);
		$stmt->execute(
			':id'=>$id;
		);
		 
		$affected_rows=$stmt->rowCount();
 		return $affected_rows;
	}







}






 ?>