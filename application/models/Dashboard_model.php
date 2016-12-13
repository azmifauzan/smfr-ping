<?php
/**
* 
*/
class Dashboard_model extends CI_Model
{
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function getAllPerangkat()
	{
		$this->db->select('perangkat.*');
		$this->db->select('kota.nama_kota');
		$this->db->join('kota','kota.id_kota=perangkat.id_kota');
		return $this->db->get('perangkat');
	}

	public function getStatusPerangkat($idp)
	{
		$this->db->where('id_perangkat',$idp);
		$this->db->limit(1);
		$this->db->order_by('waktu','desc');
		$has = $this->db->get('status');
		if($has->num_rows() == 1)
			return $has->result_array();
		else
			return "n/a";
	}
}