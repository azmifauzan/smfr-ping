<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Kota extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('isLogin') != TRUE)
            redirect('dashboard');
        $this->load->model('Kota_model');
        
    } 

    /*
     * Listing of kota
     */
    function index()
    {
        $data["menu"] = "Kota";
        $data['kota'] = $this->Kota_model->get_all_kota();
        $data['title'] = "Kota";
        $this->load->view('kota/index',$data);
    }

    /*
     * Adding a new kotum
     */
    function add()
    {   
        $data["menu"] = "Kota";
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama_kota','Nama Kota','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nama_kota' => $this->input->post('nama_kota'),
				'keterangan' => $this->input->post('keterangan'),
            );
            
            $kotum_id = $this->Kota_model->add_kotum($params);
            redirect('kota/index');
        }
        else
        {
            $data['title'] = "Kota";
            $this->load->view('kota/add',$data);
        }
    }  

    /*
     * Editing a kotum
     */
    function edit($id_kota)
    {   
        $data["menu"] = "Kota";
        // check if the kotum exists before trying to edit it
        $kotum = $this->Kota_model->get_kotum($id_kota);
        
        if(isset($kotum['id_kota']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama_kota','Nama Kota','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nama_kota' => $this->input->post('nama_kota'),
					'keterangan' => $this->input->post('keterangan'),
                );

                $this->Kota_model->update_kotum($id_kota,$params);            
                redirect('kota/index');
            }
            else
            {   
                $data['kotum'] = $this->Kota_model->get_kotum($id_kota);
                $data['title'] = "Kota";
                $this->load->view('kota/edit',$data);
            }
        }
        else
            show_error('The kotum you are trying to edit does not exist.');
    } 

    /*
     * Deleting kotum
     */
    function remove($id_kota)
    {
        $kotum = $this->Kota_model->get_kotum($id_kota);

        // check if the kotum exists before trying to delete it
        if(isset($kotum['id_kota']))
        {
            $this->Kota_model->delete_kotum($id_kota);
            redirect('kota/index');
        }
        else
            show_error('The kotum you are trying to delete does not exist.');
    }
    
}
