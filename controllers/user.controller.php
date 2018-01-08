
<?php
class UserController extends Controller{
	protected $modelUser;
	public function __construct () {
		parent::__construct();
		$this->modelUser = $this->loadModel('user');
		$this->modelHome = $this->loadModel('home');
	}
	public function index(){
		$this->render('index', 'user');

	}
	public function pariez(){
		$scope['events'] = $this->modelUser->listevent();
		for ($i = 0; $i < count($scope["events"]); $i++) {
			$miseA = intval($scope["events"][$i]->miseA);
			$miseB = intval($scope["events"][$i]->miseB);
			$miseT = $miseA + $miseB;
			$miseA = $miseA * 100;
			$coteA = $miseA / $miseT;
			$coteB = 100 - $coteA;
			$scope["events"][$i]->coteA = ROUND($coteA);
			$scope["events"][$i]->coteB = ROUND($coteB);
		}
		$this->render('pariez', 'user', $scope);
	}
	public function account(){
		$scope['users'] = $this->modelUser->get($_SESSION['id']);
		$this->render('account', 'user', $scope);
	}
	public function listuser(){
		$this->alluser();
			$this->render('show', 'user');
	}
	public function update() {
		if (strlen($_POST['pwd']) < 8) {
			$this->errors["pwd"] = "Votre mot de passe est trop court";
		}
		if (strlen($_POST['pwd']) > 50) {
			$this->errors["pwd"] = "Votre mot de passe est trop long";
		}
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$this->errors["email"] = "Votre email n'est pas valide, veuillez vérifier";
		}
		if (strlen($_POST['login']) < 5) {
			$this->errors["login"] = "Votre identifiant est trop court";
		}
		if (strlen($_POST['login']) > 20) {
			$this->errors["login"] = "Votre identifiant est trop long";
		}
		if($this->errors){
			$this->modelUser->upd();
			$this->render('index', 'user');	
		}
		else{
			echo'Update : info false, try again';
			$this->render('index', 'user');	
		}
	}
	public function admi(){
		$this->render('event', 'user');
	}
	public function deconnex(){
		session_destroy();
		header("Location:". WEBROOT . "home/connex");
	}
	public function insert(){
		$this->modelUser->insev();
		$scope['events'] = $this->modelUser->listevent();
		$this->pariez();

	}
	public function add_betA($id){
		if($_POST['miseA'] < $_SESSION['token'] || 0 >= $_SESSION['token']){
			$this->modelUser->insteamA($id);
			$this->modelHome->deduc($_POST['miseA']);
			$_SESSION['token'] = $_SESSION['token'] - $_POST['miseA'];
			$this->pariez();
		}
		else{
			echo "Account : False";
			$this->pariez();
		}
	}
	public function add_betB($id){
		if($_POST['miseB'] < $_SESSION['token'] || 0 >= $_SESSION['token']){
			$this->modelUser->insteamB($id);
			$this->modelHome->deduc($_POST['miseB']);
			$_SESSION['token'] = $_SESSION['token'] - $_POST['miseB'];
			$this->pariez();
		}
		else{
			echo "Account : False";
			$this->pariez();
		}
	}
}