<?php
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Config\Database.php");
	
	class Funder
	{
		private $name;
		private $email;
		private $mobileNumbers;
		private $conn;
		private const TABLE = "funders";
		
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
			$this->fullName = htmlspecialchars(strip_tags(trim($request['name'])));
			$this->email = htmlspecialchars(strip_tags(trim(strtolower($request['email']))));
			$this->mobileNumbers = htmlspecialchars(strip_tags(trim($request['mobileNumbers'])));
		}
		
		/**
		* Save the instance in the database
		*
		* @return void
		*/
		public function save()
		{
			if($stmt = $this->conn->prepare("INSERT INTO ".self::TABLE." (name, email, mobile_numbers) VALUES (?,?,?)")) {			
				$stmt->bind_param("sss", $this->fullName, $this->email, $this->mobileNumbers);
				
				return $stmt->execute();
			}else
				echo "Prepare failed: (" . $this->conn->errno . ") " . $this->conn->error;
		}
	}
	
?>