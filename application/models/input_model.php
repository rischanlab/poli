<?php
class Input_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function insert_data_to_poli($mhs){
		return $this->db->insert('KKN_POLI', $mhs); 
	}
	
	function cek_data_ada_tidak($nim){
		$query=$this->db->query("SELECT * FROM KKN_POLI WHERE NIM='$nim'");
		return $query;
	}

	function Data_Login($user,$pass)
		{
			
			$query=$this->db->query("select * from KKN_POLIADMIN where USERNAME='$user' and PASSWORD='$pass'");
			return $query;
		}

}
?>
