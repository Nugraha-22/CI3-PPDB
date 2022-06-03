<?php
/**
 * 
 */
class Fasilitas extends CI_Controller
{
	
	public function index(){
		$data['title'] = 'Fasilitas - Kasih Sayang Bunda';
		$data['fasilitas'] = $this->db->get('fasilitas')->result_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Sistem-Informasi/Fasilitas',$data);
		$this->load->view('Template/Footer');
	}
	
}