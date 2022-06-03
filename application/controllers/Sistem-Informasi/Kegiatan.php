<?php
/**
 * 
 */
class Kegiatan extends CI_Controller
{
	
	public function index(){
		$data['title'] = 'Kegiatan - Kasih Sayang Bunda';
		$data['kegiatan'] = $this->db->get('kegiatan')->result_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Sistem-Informasi/Kegiatan',$data);
		$this->load->view('Template/Footer');
	}
	
}