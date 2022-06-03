<?php
/**
 * 
 */
class Strukturorganisasi extends CI_Controller
{
	
	public function index(){
		$data['title'] = 'Struktur Organisasi - Kasih Sayang Bunda';
		$data['strukturorganisasi'] = $this->db->get('struktur_organisasi')->result_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Sistem-Informasi/Struktur-Organisasi',$data);
		$this->load->view('Template/Footer');
	}
	
}