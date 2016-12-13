<?php
class Status_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function tambah($idp,$st)
	{
		$data = array(
			'id_perangkat' => $idp,
			'waktu' => date('Y-m-d H:i:s'),
			'status' => $st
		);
		$this->db->insert('status',$data);
	}
}