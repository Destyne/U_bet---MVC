 <?php
class Model {
	protected $table;
 	protected static $_pdo = null;
 	function __construct() {
 		$user = 'root';
 		$password = "";
 		$database = 'u_bet';
 		$host = 'localhost';
 		if(self::$_pdo === null) {
 			self::$_pdo = new PDO('mysql:host=' . $host . ";dbname=" . $database,
			$user, $password);
 		}
 	}
 	public function get($id) {
 		$sql = "SELECT * FROM :table WHERE `id`=:id";
 		$query = self::$_pdo->prepare($sql);
 		$query->bindParam(":table", $this->table, PDO::PARAM_STR);
 		$query->bindParam(":id", $id, PDO::PARAM_INT);
 		$query->execute();
 		return $query->fetch(PDO::FETCH_OBJ);
 	}
}