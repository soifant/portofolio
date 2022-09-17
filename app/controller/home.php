<?php

class Home extends Controller{
	
	public function index(){
		
		$data['index'] = 'home';
		$data['page'] = 'Beranda';
		$data['artikel'] = $this->model('Home_model')->getArtikel();
		$this->view('template/header', $data);
		$this->view('home/index', $data);
		$this->view('template/footer');
	}
	
	
	public function project(){
		$data['index'] = 'home';
		$data['page'] = 'project';
		$data['project'] = $this->model('Home_model')->allProject();
		$this->view('template/header', $data);
		$this->view('home/project', $data);
		$this->view('template/footer');
	}

	public function articel(){
		$data['index'] = 'home';
		$data['page'] = 'articel';
		$data['artikel'] = $this->model('Home_model')->getArtikel();
		$this->view('template/header', $data);
		$this->view('home/articel', $data);
		$this->view('template/footer');
	}
	
	public function contack(){
		$data['index'] = 'home';
		$data['page'] = 'contack';
		$this->view('template/header', $data);
		$this->view('home/contack');
		$this->view('template/footer');
	}
	
	
	public function read($judul){
	
		
		$data['index'] = 'home';
		$data['page'] = 'read';
		$data['artikel'] = $this->model('Home_model')->getArtikel($judul);
		$data['read'] = $this->model('Home_model')->getRead($judul);
		$this->view('template/header', $data);
		$this->view('home/read', $data);
		$this->view('template/footer');
		
	}
	
	public function detail($judul){
	

		$data['index'] = 'home';
		$data['page'] = $judul;
		$data['project'] = $this->model('Home_model')->getProject($judul);
		foreach($data['project'] as $dp){
		$id = $dp['id'];
		}
		$data['detail'] = $this->model('Home_model')->getDetail($id);
		$data['harga'] = $this->model('Home_model')->getHarga($id);
		$data['read'] = $this->model('Home_model')->getRead($judul);
		$this->view('template/header', $data);
		$this->view('home/detail', $data);
		$this->view('template/footer');
	
	}
}




?>