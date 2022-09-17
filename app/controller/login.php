<?php

class Login extends Controller{
	
	public function index(){
		$data['index'] = 'login';
		$data['page'] = 'login';
		$this->view('template/header', $data);
		$this->view('login/index');
		$this->view('template/footer');
	}
	
	public function login(){
	
		$data = $this->model('Admin_model')->login($_POST);
		
		if(isset($data[0])){
		
		foreach($data as $u){
			$p = $u['password'];
		}
		
		if($p == $_POST['password']){
			$_SESSION['user'] = true;
			header('location:?url=admin');
		}else{
			header('location:?url=login');
		}
		
		}else{
			header('location:?url=login');
		}
	}
	
	public function out(){
		unset($_SESSION['user']);
		header('location:?url=login');
	}

}


?>