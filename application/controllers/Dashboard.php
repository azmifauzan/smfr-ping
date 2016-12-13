<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('Dashboard_model','dbm');
	}

	public function index()
	{
		$this->load->library('googlemaps');
		$this->googlemaps->initialize();
		$perangkat = $this->dbm->getAllPerangkat();
		$data['title'] = 'Dashboard';
		foreach ($perangkat->result() as $pr) {
			$sta = $this->dbm->getStatusPerangkat($pr->id_perangkat);
			$marker["animation"] = "DROP";
			$marker["title"] = $pr->nama_perangkat; 
			$marker["position"] = $pr->latitude.",".$pr->longitude;
			
			$marker["infowindow_content"] = "<strong>Perangkat: ".$pr->nama_perangkat."</strong><br/>Ping Status: ";
			
			if($sta == "n/a"){
				$marker["icon"] = "http://maps.google.com/mapfiles/ms/micons/yellow-dot.png";
				$marker["infowindow_content"] .= "N/A<br/>Last Ping: N/A";
			}else if($sta[0]['status'] == 1){
				$marker["icon"] = "http://maps.google.com/mapfiles/ms/micons/green-dot.png";
				$marker["infowindow_content"] .= "Reply<br/>Last Ping: ".date('d F Y, H:i',strtotime($sta[0]['waktu']));
			}else{
				$marker["icon"] = "http://maps.google.com/mapfiles/ms/micons/red-dot.png"; 
				$marker["infowindow_content"] .= "Timed Out<br/>Last Ping: ".date('d F Y, H:i',strtotime($sta[0]['waktu']));
			}
			
			$this->googlemaps->add_marker($marker);
			$st[$pr->id_perangkat] = $sta;
		}
		
		$data["perangkat"] = $perangkat;
		$data["status"] = $st;
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('dashboard_view',$data);
	}
}