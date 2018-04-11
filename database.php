<?php 

// class DataBase{
// 	private $connection;

// 	private function getConnected(){
// 		if(!$this->connection){
// 			$this->connection=new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
// 		}else{
// 			return $this->connection;
// 		}
			
// 		}
	

// 	public function getAllItems(){
// 		$this->getConnected();
// 		$sql="SELECT * FROM Q4";
// 		$stmt=$this->connection->query($sql);
// 		$result=$stmt->fetchAll(PDO:FETCH_ASSOC);
// 		return $result;
// 	}

// 	public function selectItem($id){
// 		$this->getConnected();
// 		$sql="SELECT * FROM Q4 WHERE item_num=:id";
// 		$stmt=$this->connection->prepare($sql);
// 		$stmt->execute(
// 			':id'=>$id;
// 		);
		 
// 		$affected_rows=$stmt->rowCount();
//  		return $affected_rows;
// 	}

// }

$select_id=$_POST['select_id'];
$select_name=$_POST['select_name'];
//$_REQUEST

$update_id=$_POST['update_id'];
$update_orign=$_POST['update_orign'];
$update_cur=$_POST['update_cur'];

$delete_id=$_POST['delete_id'];

	echo "<table style='border: solid 1px black;'>";
	echo "<tr><th>Id</th><th>Name</th><th>Description</th><th>Quantity</th></tr>";

	class TableRows extends RecursiveIteratorIterator { 
	    function __construct($it) { 
	        parent::__construct($it, self::LEAVES_ONLY); 
	    }

	    function current() {
	        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
	    }

	    function beginChildren() { 
	        echo "<tr>"; 
	    } 

	    function endChildren() { 
	        echo "</tr>" . "\n";
	    } 
	} 

try{
		$conn = new PDO('mysql:host=localhost;dbname=question4;charset=utf8mb4','root','root');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if($select_id || $select_name){
			$conn->exec("SET names utf8");
		    $stmt = $conn->prepare("SELECT * FROM Q4 where iterm_num = $select_id"); 
		    $stmt->execute();
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
		        echo $v;
		    }
		}else if($update_id&&$update_orign&&$update_cur){
			$sql = "UPDATE Q4 SET quantity=$update_cur WHERE iterm_num = $update_id";
			//echo $sql;
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();
		    echo $stmt->rowCount() . " records UPDATED successfully";
		}else if($delete_id){
    		//delete SQL statement
		    $sql = "DELETE FROM Q4 WHERE iterm_num = $delete_id";
		    $conn->exec($sql);
		    echo "Record deleted successfully";
		}else{
			
		}

	}catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}

	$conn = null;







 ?>