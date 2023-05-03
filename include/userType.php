<?php
include_once('connect.php');

class userType {

	private $id;
	private $name;
	private $mysqli;

	function __construct() {
		$this->mysqli = dbConnect();
	}
	public static function withId($id) {
		$instance = new self();
		$instance->getUserType($id);
		return $instance;
		
	
	}
	public function getUserType($id) {
		$sql = "select * from usertypes where id = ". $id;
		
		$result = $this->mysqli->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$this->name = $row['name'];
				$this->id = $row['id'];
			}
			
		}	
	
	}
	
	
	public function getId() {return $this->id;}
	public function getName() {return $this->name;}
	
	public function setId($id) {$this->id = $id;}
	public function setName($name) {$this->name = $name;}


	public static function displayUserOptionList() {
		
		$mysqli = dbConnect();
		$sql = "select * from usertypes";
		$result = $mysqli->query($sql);
		echo '<option>Choose User Role</option>';

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_array()) {
				echo '<option value="'. $row['id'] .'">' . $row['name'] . '</option>';
			}
		} else {
			echo "<option>No User...</option>";
		}
		$mysqli->close();   	
	}
}

?>