<?php
/**
 * 
 */
class Beranda extends CI_Controller
{
	
	public function index(){
		$data['title'] = 'Beranda - Kasih Sayang Bunda';
		$data['banner'] = $this->db->get('banner')->result_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Sistem-Informasi/Beranda',$data);
		$this->load->view('Template/Footer');
	}
	
}