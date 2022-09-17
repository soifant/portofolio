<?php

class App{
	//Property
	private $control = 'home',
			$model = 'index',
			$param = [];

	public function __construct(){
		$url = $this->getUrl();
	
	//Mengambil control
	if(file_exists('app/controller/'.$url[0].'.php')){
		$this->control = $url[0];
		unset($url[0]);
	}
	
	require_once 'app/controller/'.$this->control.'.php';
	$this->control = new $this->control;
	
	//Mengambil model
	if(isset($url[1])){
		if(method_exists($this->control, $url[1])){
			$this->model = $url[1];
			unset($url[1]);
		}
	}
	
	//Mengambil param
	if(!empty($url[2])){
		$this->param = array_values($url);
	}
	
	call_user_func_array([$this->control, $this->model], $this->param);
	
	}
	//Mendapatkan url
	public function getUrl(){
	
	
		if($_GET['url']){
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
				
			if(isset($_SESSION['user'])){
				return $url;
			}else{
				
				if($url[0] == 'admin' or $url[0] == 'tambah'){
				
					return $url = [0 => 'login'];
				}else{
				
					return $url;
				}
			}
				
		}
	

	}


}




?>