<?php 

class M_Reporte extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function verificaUsuario($user) {
		$sql = "SELECT *
				  FROM tb_vendedores
				 WHERE usuario LIKE '%".$user."%'";
		$result = $this->db->query($sql);
		return $result->result();
	}
}