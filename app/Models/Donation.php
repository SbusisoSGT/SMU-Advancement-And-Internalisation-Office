<?php
	
	require_once(__DIR__.'\..\Config\Database.php');

	class Donation
	{
		private $type;
		private $description;
		private $funder_id;
		private $conn;
		private const TABLE = "donations";
		
		/**
		* Get the database connection to use in this model (DI)
		*
		* @return void
		*/
		public function __construct(Database $database)
		{
			$this->conn = $database->connect();
		}
		
        /**
		* Get all donations 
		*
		* @return void
		*/
		public static function all()
		{
            $database = new Database();
			$conn = $database->connect();
    
            $stmt = $conn->prepare("SELECT f.name, d.* FROM donations d JOIN funders f WHERE f.id = d.funder_id");
			$stmt->execute();

			$result = $stmt->get_result();
		    return $result;
		}

		/**
		* Get single donation instance
		*
		* @param int $id
		* @return void
		*/
		public static function find(int $id)
		{
            $database = new Database();
			$conn = $database->connect();
		
		    $stmt = $conn->prepare("SELECT * FROM ".self::TABLE." WHERE id = ?"); 
			$stmt->bind_param("i", $id);
			$stmt->execute();

			$result = $stmt->get_result(); 
			
			return $result;
		}
		
		/**
		* Set all the properties of this model 
		*
		* @param array $request
		* @return void
		*/
		public function setProperties(array $request)
		{
			$this->type = htmlspecialchars(strip_tags(trim($request['type'])));
			$this->description = htmlspecialchars(strip_tags(trim($request['description'])));
			$this->funder_id = htmlspecialchars(strip_tags(trim($request['funder_id'])));
		}
		
		/**
		* Save the instance in the database
		*
		* @return void
		*/
		public function save()
		{
			if($stmt = $this->conn->prepare("INSERT INTO ".self::TABLE." (type, description, funder_id) VALUES (?,?,?)")) {			
				$stmt->bind_param("sss", $this->type, $this->description, $this->funder_id);
				
				return $stmt->execute();
			}else
				echo "Prepare failed: (" . $this->conn->errno . ") " . $this->conn->error;
		}

		/**
		* Edit the given instance in the database
		*
		* @param array $request
		* @return void
		*/
		public static function update(array $request)
		{ 
			$database = new Database();
			$conn = $database->connect();

			if($stmt = $conn->prepare("UPDATE ".self::TABLE." SET type = ?, description = ? WHERE id = ?")) {			
				$stmt->bind_param("sss", $request['type'], $request['description'], $request['id']);
				
				return $stmt->execute();
			}else
				echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
		}

		/**
		* Delete donation instance
		*
		* @param int $id
		* @return void
		*/
		public static function delete(int $id)
		{
			$database = new Database();
			$conn = $database->connect();
    
            $stmt = $conn->prepare("DELETE FROM ".self::TABLE." WHERE id = ?");
			$stmt->bind_param("i", $id);
			$stmt->execute();

			$result = $stmt->get_result(); 
			
			return $result;
		}
	}
	
?>