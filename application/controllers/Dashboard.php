<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');

    $this->load->model('UserModel');
	$this->load->model('M_home');
  }

	public function index()
	{  
		$nama = $this->session->userdata('nama_depan');

		if ($this->session->has_userdata('logged_in')) {

			
			$variabel_pohon = $this->M_home->getVariabelPohon();
			$variabel_co2 = $this->M_home->getVariabelCO2();

			$jml_plts = $this->M_home->getJmlPLTS();
			$total_kapasitas = $this->M_home->getTotalKapasitas();
			$last_processed_log = $this->M_home->getLastProcessed();
			$summaryInverter = $this->M_home->getSummaryInverter();
			$summaryCharger = $this->M_home->getSummaryCharger();
			
			$warningAlertInverter = $this->M_home->getSummaryInverter();
			$warningAlertCharger = $this->M_home->getSummaryCharger();
			
			$data_plts = $this->M_home->getPlts();
			//var_dump($data_plts);
			$data = array(  
				'nama' => $nama,
				'active' => 'Dashboard',
				'sidebar'=>'nav_Sidebar',
				'header'=>'nav_Header',
				'content'=>'content_Dashboard',
				'title'=>'Dashboard',
				'variabel_pohon' => $variabel_pohon,
				'variabel_co2' => $variabel_co2,
				'jml_plts' => $jml_plts,
				'total_kapasitas' => $total_kapasitas,
				'last_processed_log' => $last_processed_log,
				'summaryInverter' => $summaryInverter,
				'summaryCharger' => $summaryCharger,
				'data_plts' => $data_plts,
				'warningAlertInverter' => $warningAlertInverter,
				'warningAlertCharger' => $warningAlertCharger
			);
			
			$this->load->view('master_page', $data);
		}else{
			$this->load->view('login');
		}
	}
}
