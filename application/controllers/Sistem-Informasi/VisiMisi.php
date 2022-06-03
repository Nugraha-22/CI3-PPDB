<?php
/**
 * 
 */
class Visimisi extends CI_Controller
{
	
	public function index(){
		$data['title'] = 'Visi & Misi - Kasih Sayang Bunda';
		$data['visimisi'] = $this->db->get('visi_misi')->result_array();	
		$this->load->view('Template/Header',$data);
		$this->load->view('Sistem-Informasi/Visi-Misi',$data);
		$this->load->view('Template/Footer');
	}
	
}