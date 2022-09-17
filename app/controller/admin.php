<?php

class Admin extends Controller{

	
	public function index(){
	
	
	
		$data['index'] = 'admin';
		$data['page'] = 'Beranda';
		$data['project'] = $this->model('Home_model')->allProject();
		$this->view('template/header', $data);
		$this->view('admin/index', $data);
		$this->view('template/footer');
	
		
	
	}
	
	
	
	public function articel(){
	
	
		$data['index'] = 'admin';
		$data['page'] = 'articel';
		$data['artikel'] = $this->model('Home_model')->getArtikel();
		$this->view('template/header', $data);
		$this->view('admin/articel', $data);
		$this->view('template/footer');
	
	
	}
	
	public function add($page, $id= 0, $judul = ''){
	
	
		$data['index'] = 'admin';
		$data['page'] = $page;
		$data['judul'] = $judul;
		$data['id'] = $id;
		$this->view('template/header', $data);
		$this->view('admin/add', $data);
		$this->view('template/footer');
	
	
	}
	
	
	public function edit($page, $judul){
	
		$data['index'] = 'admin';
		$data['page'] = $page;
		$data['articel'] = $this->model('Home_model')->getRead($judul);
		$data['project'] = $this->model('Home_model')->getProject($judul);
		$data['harga'] = $this->model('Home_model')->getHarga($judul);
		$data['detail'] = $this->model('Home_model')->getDetail($judul);
		$this->view('template/header', $data);
		$this->view('admin/edit', $data);
		$this->view('template/footer');
	
	
	}

	public function editProject($judul){
	
		$data['index'] = 'admin';
		$data['page'] = 'edit';
		$data['project'] = $this->model('Home_model')->getProject($judul);
		$this->view('template/header', $data);
		$this->view('admin/edit-project',$data);
		$this->view('template/footer');
	
	
	}
	
	
	public function detail($page, $id){
	
		$data['page'] = $page;
		$data['index'] = 'admin';
		$data['project'] = $this->model('Home_model')->getProject($id);
		foreach($data['project'] as $dp){
		$id_p = $dp['id'];
		}
		$data['read'] = $this->model('Home_model')->getRead($id);
		$data['harga'] = $this->model('Home_model')->getHarga($id_p);
		$data['detail'] = $this->model('Home_model')->getDetail($id_p);
		$this->view('template/header', $data);
		$this->view('admin/detail', $data);
		$this->view('template/footer');
	
	
	}
	

}






?>