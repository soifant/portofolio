<?php

class Admin_model{
	private $db;
	
	public function __construct(){
		$this->db = new Database;
	}
	
	public function tambahProject($data = []){
		$query = 'INSERT INTO data_project SET judul=:j, project=:p, status=:s';
		$this->db->query($query);
		$this->db->bind('j', $data['judul']);
		$this->db->bind('p', $data['project']);
		$this->db->bind('s', 'public');
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function editProject($data = []){
	
		$query = 'UPDATE data_project SET judul=:j, project=:p WHERE id=:id';
		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('j', $data['judul']);
		$this->db->bind('p', $data['project']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function statusProject($id, $status){
	
		$query = 'UPDATE data_project SET status=:s WHERE id=:id';
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->bind('s', $status);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function addArticel($data=[]){
		
		$query = 'INSERT INTO data_artikel SET judul=:j, kategori=:k, deskripsi=:d, kontent=:ko, status=:st';
		$this->db->query($query);
		$this->db->bind('j', $data['judul']);
		$this->db->bind('k', $data['kategori']);
		$this->db->bind('d', $data['deskripsi']);
		$this->db->bind('st', 'public');
		$this->db->bind('ko', $data['kontent']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	
	public function addDetail($data=[]){
	
		$query = 'INSERT INTO detail_project SET id_project =:i, start=:s, end=:e, full=:f, code=:c, front=:fr, back=:b, price=:p';
		$this->db->query($query);
		$this->db->bind('i', $data['id_project']);
		$this->db->bind('s', $data['start']);
		$this->db->bind('e', $data['end']);
		$this->db->bind('f', $data['full']);
		$this->db->bind('c', $data['code']);
		$this->db->bind('fr', $data['front']);
		$this->db->bind('b', $data['back']);
		$this->db->bind('p', $data['price']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function addHarga($data=[]){
	
		$query = 'INSERT INTO harga_project SET id_project=:id, dev=:d, ui=:i, ux=:x, domain=:do, server=:s, total=:t';
		$this->db->query($query);
		$this->db->bind('id', $data['id_project']);
		$this->db->bind('d', $data['dev']);
		$this->db->bind('i', $data['ui']);
		$this->db->bind('x', $data['ux']);
		$this->db->bind('do', $data['domain']);
		$this->db->bind('s', $data['server']);
		$this->db->bind('t', $data['total']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function statusArticel($id, $status){
	
		$query = 'UPDATE data_artikel SET status=:s WHERE id=:id';
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->bind('s', $status);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function editArticel($data = []){
	
		$query = 'UPDATE data_artikel SET judul=:j, kategori=:k, deskripsi=:d, kontent=:ko WHERE id=:id';
		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('j', $data['judul']);
		$this->db->bind('k', $data['kategori']);
		$this->db->bind('d', $data['deskripsi']);
		$this->db->bind('ko', $data['kontent']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function cekArticel(){
		$query = 'SELECT COUNT(*) FROM data_artikel WHERE =:s';
		$this->db->query($query);
		$this->db->bind('s', 'public');
		return $this->db->ambilData();
	}
	
	public function editHarga($data=[]){
	
		$query = 'UPDATE harga_project SET dev=:d, ui=:i, ux=:x, domain=:do, server=:s, total=:t WHERE id_project=:id';
		$this->db->query($query);
		$this->db->bind('id', $data['id_project']);
		$this->db->bind('d', $data['dev']);
		$this->db->bind('i', $data['ui']);
		$this->db->bind('x', $data['ux']);
		$this->db->bind('do', $data['domain']);
		$this->db->bind('s', $data['server']);
		$this->db->bind('t', $data['total']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function editDetail($data=[]){
	
		$query = 'UPDATE detail_project SET start=:s, end=:e, full=:f, code=:c, front=:fr, back=:b, price=:p WHERE id_project=:i';
		$this->db->query($query);
		$this->db->bind('i', $data['id_project']);
		$this->db->bind('s', $data['start']);
		$this->db->bind('e', $data['end']);
		$this->db->bind('f', $data['full']);
		$this->db->bind('c', $data['code']);
		$this->db->bind('fr', $data['front']);
		$this->db->bind('b', $data['back']);
		$this->db->bind('p', $data['price']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function login($data = []){
		$query = 'SELECT username, password FROM data_user WHERE username=:u';
		$this->db->query($query);
		$this->db->bind('u', $data['username']);
		return $this->db->ambilData();
	}

}



?>