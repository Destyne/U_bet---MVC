<?php
class DefaultController extends Controller{
 	public function index(){
 		$data["message"] = "ca marche";
 		$this->render('index', 'default', $data);
 	}
 }