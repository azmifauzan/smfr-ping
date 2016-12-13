<?php
class Status extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Status_model','stm');
	}

	public function add($idp,$st)
	{
		$this->stm->tambah($idp,$st);
	}
}