<?php

class HomeController extends Controller{
	public $errors = [];
	protected $modelHome;
	public function __construct () {
 		parent::__construct();
 		$this->modelUser = $this->loadModel('user');
 		$this->modelHome = $this->loadModel('home');
 	}
 	public function show($id){
 		return $scope['users'] = $this->modelHome->get($id);
 	}

 	public function inscrip(){
 		if(!empty($this->request)){
 			$this->insert_model();
 		}
 		$this->render('inscrip', 'home');
 	}

 	public function insert_model()
	{

		if (strlen($_POST['pwd']) < 8) {
			$this->errors["pwd"] = "Votre mot de passe est trop court";
		}
		if (strlen($_POST['pwd']) > 50) {
			$this->errors["pwd"] = "Votre mot de passe est trop long";
		}
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$this->errors["email"] = "Votre email n'est pas valide, veuillez vérifier";
			echo ' Inscription : False';
		}
		if (empty($_POST['login']) ||
			empty($_POST['email']) ||
			empty($_POST['pwd'])){
			return false;

		}
		if (strlen($_POST['login']) < 5) {
			$this->errors["login"] = "Votre identifiant est trop court";
		}
		if (strlen($_POST['login']) > 20) {
			$this->errors["login"] = "Votre identifiant est trop long";
		}
		if(empty($this->errors)){
			$this->modelHome->insert($_POST);	
		}
	}
	public function connex(){

	if(isset($_POST) && !empty($_POST)){
		$user_connect = $this->modelHome->checkConnect();
		if($user_connect['Row_Count'] == 0){
			$error = "tu t'est gourrer";
			echo'Identifiants : False';
			$this->render('connex', 'home');
		}
		else {
			$result = $user_connect['Fetch'];
			$_SESSION['token'] = $result['token'];
			$_SESSION['status'] = $result['status'];
			$_SESSION['login'] = $result['login'];
			$_SESSION['id'] = $result['id'];

 			header("Location:". WEBROOT . "user/index");
		}
	}
	else{
 			$this->render('connex', 'home');	
		}
	}
}

