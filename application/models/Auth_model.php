<?php
/**
* 
*/
class Auth_model extends CI_Model
{
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function cekLogin($u,$p)
	{
		$this->db->where('username',$u);
        $this->db->where('password',MD5($p));
        $this->db->from('user');
        $cek = $this->db->count_all_results();
        if($cek == 1)
            return TRUE;
        else
            return FALSE;
	}
}