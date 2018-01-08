<?php
class HomeModel extends Model{
	protected $table = 'user';
	public function get ($id) {
		$sql = "SELECT * FROM ".$this->table." WHERE id=:id";
		$query = self::$_pdo->prepare($sql);
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	
	public function insert()
	{
		$hash = hash('ripemd160', $_POST['pwd']);
		$sql = array(
			":login" => $_POST['login'],
			":email" => $_POST['email'],
			":pwd" => $hash
			);
		$querry= self::$_pdo->prepare("INSERT INTO user ( login, pwd, email) 
			VALUES ( :login, :pwd, :email )");
		$querry->execute($sql);

		return true;
	}
	public function checkConnect(){
		$hash = hash('ripemd160', $_POST['pwd']);
		$sql = "Select * from user where login = :login && pwd = :pwd";
		$reqsql = self::$_pdo->prepare($sql);
		$reqsql->execute(array(
			":login" => $_POST['login'],
			":pwd" => $hash));
		$info_sql = ['Row_Count'=>$reqsql->rowCount(), 'Fetch'=>$reqsql->fetch(PDO::FETCH_ASSOC)];
		return $info_sql;
	}

	public function deduc($token){	
		$sql = "UPDATE user SET `token` = `token` - :token WHERE id = :id";
		$query = self::$_pdo->prepare($sql);
		$query->bindParam(':token', $token);
		$query->bindParam(':id',  $_SESSION['id'], PDO::PARAM_INT);
		$query->execute();
		return $query->fetchAll();
	}
}