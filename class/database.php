<pre>

	<?php 

	class Database {

		private $conn;

		function __construct($servername = "localhost",$username = "root",$password = "",$database = "schop"){

			try {
				$this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "Connected successfully"; 
			}
			catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();



				function __destruct() {

				$this->conn = null;
			}

			}
			

		}
		public function select($sql) {

			$request = $this->conn->prepare($sql);
			$request->execute();

			$result = $request->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}


		public function select_array($sql) {

			$request = $this->conn->prepare($sql);
			$request->execute();

			$result = $request->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		public function insert($t, $f, $v) {

			$sql = "INSERT INTO $t (";
			foreach ($f as $column) {
				$sql .= $column . ",";

			}

			$sql .=rtrim($sql, ","); 

			$sql .= ") VALUES (";

			foreach ($v as $value) {
				$sql .= "'".$value . "',";
			}

			$sql .= ")";

			

			die($sql);
			$request = $this->conn->prepare($sql);
			$request->execute();

			$result = $request->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}



	}
/*
	$db = new Database ();
	print_r($db->select("SELECT * FROM prekes"));





$request = $conn->prepare("SELECT * FROM prekes");
$request->execute();

$result = $request->fetchAll(PDO::FETCH_ASSOC);

show($result);


function show($data) {

	echo "<pre>";
	print_r($data);
	echo "<pre>";
}


?>

*/