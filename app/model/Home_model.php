<?php

class Home_model{

	private $db;
	
	public function __construct(){
		$this->db = new Database;
	
	}
	
	public function getArtikel($judul = 'UNKNOWN'){
		
		$query = "SELECT * FROM data_artikel WHERE NOT judul=:j and status=:s ORDER BY id DESC";
		$this->db->query($query);
		$this->db->bind('j', str_replace('-', ' ', $judul));
		$this->db->bind('s', 'public');
		return $this->db->ambilData();
	
	}
	
	public function getRead($judul){
	
		$query = "SELECT * FROM data_artikel WHERE judul=:j";
		$this->db->query($query);
		$this->db->bind('j', str_replace('-', ' ', $judul));
		return $this->db->ambilData();
	
	}
	
	public function allProject(){
	
		$query = "SELECT * FROM data_project WHERE status=:s ORDER BY id DESC";
		$this->db->query($query);
		$this->db->bind('s', 'public');
		return $this->db->ambilData();
	
	}
	
	public function getProject($judul){
	
		$query = "SELECT * FROM data_project WHERE judul=:j";
		$this->db->query($query);
		$this->db->bind('j', str_replace('-', ' ', $judul));
		return $this->db->ambilData();
	
	}
	
	public function getDetail($id){
	
		$query = "SELECT * FROM detail_project WHERE id_project=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		return $this->db->ambilData();
	
	}
	
	public function getHarga($id){
	
		$query = "SELECT * FROM harga_project WHERE id_project=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		return $this->db->ambilData();
	
	}
	
	public function adminProject(){
	
		$query = "SELECT * FROM data_project ORDER BY id DESC";
		$this->db->query($query);
		return $this->db->ambilData();
	
	}

}



?>