<?php
/**
* 
*/
class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model','atm');
	}

	function login()
	{
		$this->load->helper('form');
		$data['menu'] = "Login";
		$this->load->view('login_view',$data);
	}

	function proses()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error','username / password tidak dikenali');
            redirect('auth/login','refresh');
        }
        else
        {
            if($this->atm->cekLogin($u,$p))
            {
                $data = array(
                    'username' => $u,
                    'isLogin' => TRUE
                );
                $this->session->set_userdata($data);
                redirect('kota','refresh');
            }
            else
            {
                $this->session->set_flashdata('error','username / password tidak dikenali');
                redirect('auth/login','refresh');    
            }
        }
	}

    function logout()
    {
        $this->session->sess_destroy();
        redirect('dashboard','refresh');
    }
}