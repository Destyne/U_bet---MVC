<?php
class UserModel extends Model{
 	protected $table = 'user';
 	public function get ($id) {
 		$sql = "SELECT * FROM ".$this->table." WHERE id=:id";
 		$query = self::$_pdo->prepare($sql);
 		$query->bindParam(':id', $id, PDO::PARAM_INT);
 		$query->execute();
 		return $query->fetch(PDO::FETCH_OBJ);
 	}
 	
 	public function all () {
 		$sql = "SELECT * FROM ".$this->table." WHERE 1";
 		$query = self::$_pdo->prepare($sql);
 		$query->execute();
 		return $query->fetchAll(PDO::FETCH_OBJ);
 	}

 	public function upd() {
 		$hash = hash('ripemd160', $_POST['pwd']);
		$sql= "UPDATE user SET `login` = :login, `pwd` = :pwd, `email` = :email WHERE id = :id";
		$query = self::$_pdo->prepare($sql);
		$query->bindParam(':id', $_SESSION['id'] , PDO::PARAM_INT);
		$query->bindParam(':login', $_POST['login']);
		$query->bindParam(':pwd', $hash);
		$query->bindParam(':email', $_POST['email']);
		$query->execute();

		return $query->fetchAll();
 	}
 	 	public function insev() {
		$sql= "INSERT evenements SET
		 `team1` = :team1, `team2` = :team2, `date_deb` = :date_deb, `date_fin` = :date_fin, `nom_ev` = :nom_ev";
		$query = self::$_pdo->prepare($sql);
		$query->bindParam(':team1', $_POST['team1']);
		$query->bindParam(':team2', $_POST['team2']);
		$query->bindParam(':date_deb', $_POST['date_deb']);
		$query->bindParam(':date_fin', $_POST['date_fin']);
		$query->bindParam(':nom_ev', $_POST['nom_ev']);
		$query->execute();
		return $query->fetchAll();
 	}
 	public function listevent(){
 		$sql = "SELECT * from evenements";
 		$query = self::$_pdo->prepare($sql);
 		$query->execute();
 		return $query->fetchAll(PDO::FETCH_OBJ);
 	}
 	public function insteamA($id){
 		$sql = "UPDATE evenements SET `miseA` = :miseA + `miseA` WHERE id = :id";
 		$query = self::$_pdo->prepare($sql);
 		$query->bindParam(':miseA', $_POST['miseA']);

 		echo "Vous avez pariez :" . $_POST['miseA'] ."u_bet ";
 		$query->bindParam(':id',  $id, PDO::PARAM_INT);
 		$query->execute();
		return $query->fetchAll();
 	}
 	 	public function insteamB($id){
 		$sql = "UPDATE evenements SET `miseB` = :miseB + `miseB` WHERE id = :id ";
 		$query = self::$_pdo->prepare($sql);
 		$query->bindParam(':miseB', $_POST['miseB']);
 		echo "Vous avez pariez :" . $_POST['miseB'] ."u_bet ";
 		$query->bindParam(':id',  $id, PDO::PARAM_INT);
 		$query->execute();
		return $query->fetchAll();
 	}
 	 	public function alluser () {
 		$sql = "SELECT * FROM user;
 		$query = self::$_pdo->prepare($sql);
 		$query->execute();
 		return $query->fetchAll(PDO::FETCH_OBJ);
 	}
}