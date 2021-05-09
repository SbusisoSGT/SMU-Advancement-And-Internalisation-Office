<?php
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Config\Database.php");
	
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
		* Get the database connection to use in this model (DI)
		*
		* @return void
		*/
		public static function all()
		{
            $database = new Database();
			$conn = $database->connect();
    
            $stmt = $conn->prepare("SELECT * FROM ".self::TABLE);
			$stmt->execute();

			$result = $stmt->get_result();
		    return $result;
		}

		/**
		* Get the database connection to use in this model (DI)
		*
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
			// $user = $result->fetch_assoc();
			
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
			$this->description = htmlspecialchars(strip_tags(trim(strtolower($request['description']))));
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
	}
	
?>