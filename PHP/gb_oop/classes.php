<?php
	class Database {
		private $database;
		
		public function __construct() {
			$this->database = new mysqli("localhost", "root", "", "login");
		}
		
		public function query($sql) {
			$result = mysqli_query($this->database, $sql);
			
			if ($result->num_rows) {
				$data = array();

				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}
			else {
				return false;
			}
		}
		
		public function __destruct() {
			$this->database->close();
		}
	}
	
	class GuestBook {
		private $db;
		
		public function __construct($database) {
			$this->db = $database;
		}
		
		public function addComments() {
			$this->db->query();
		}
		
		public function getComments() {
			$result = $this->db->query("SELECT * FROM comments");
			
			return $result;
		}
	}
?>