<?php

class Tambah extends Controller{

	public function index(){
		if($this->model('Admin_model')->tambahProject($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function edit(){
		if($this->model('Admin_model')->editProject($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function status($id, $status){
		if($this->model('Admin_model')->statusProject($id, $status) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function articel(){
	
		if($this->model('Admin_model')->addArticel($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function detail(){
	
		if($this->model('Admin_model')->addDetail($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function harga(){
	
	
		if($this->model('Admin_model')->addHarga($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function statusArticel($id, $status){

	
		if($this->model('Admin_model')->statusArticel($id, $status) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function editArticel(){
	
	
		if($this->model('Admin_model')->editArticel($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function editProject(){
	
		if($this->model('Admin_model')->editProject($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function editHarga(){
	
		if($this->model('Admin_model')->editHarga($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	public function editDetail(){
	
		if($this->model('Admin_model')->editDetail($_POST) > 0){
			header('location:/?url=admin');
		}else{
			echo 'kesalahan'.var_dump($_POST);
		}
	}
	
	
	

}







?>