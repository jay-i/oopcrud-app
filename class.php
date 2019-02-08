<?php

require 'config.php';

class db_class extends db_connect{
	
	public function __construct(){
		$this->connect();
	}
	
	public function create($fname, $lname, $dob, $email, $user_add){
		$stmt = $this->conn->prepare("INSERT INTO users(fname, lname, dob, email, user_add) VALUES(?, ?, ?, ?, ?)") or die($this->conn->error);
		$stmt->bind_param("sssss", $fname, $lname, $dob, $email, $user_add);
		if($stmt->execute()){
			$stmt->close();
			$this->conn->close();
			return true;
		}
	}
	
	public function read(){
		$stmt = $this->conn->prepare("SELECT * FROM users") or die($this->conn->error);
		if($stmt->execute()){
			$result = $stmt->get_result();
			return $result;
		}
	}
	
	public function user_id($id){
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE id = '$id'") or die($this->conn->error);
		if($stmt->execute()){
			$result = $stmt->get_result();
			$row = $result->fetch_array();
			$stmt->close();
			$this->conn->close();
			return $row;
		}
	}
	
	public function update($fname, $lname, $dob, $email, $user_add, $id){
		$stmt = $this->conn->prepare("UPDATE users SET fname = '$fname', lname = '$lname', dob = '$dob', email = '$email', user_add = '$user_add' WHERE id = '$id'") or die($this->conn->error);
		if($stmt->execute()){
			$stmt->close();
			$this->conn->close();
			return true;
		}
	}
	
	public function delete($id){
		$stmt = $this->conn->prepare("DELETE FROM users WHERE id = '$id'");
		if($stmt->execute()){
			$stmt->close();
			$this->conn->close();
			return true;
		}
	}
}

?>