<?php
/**
 * 
 */
class Beranda extends CI_Controller
{
	public function __construct(){
		parent::__construct();

		is_logged_in();
	}
	
	public function index(){
		$data['title'] = 'Beranda - Kasih Sayang Bunda';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/index',$data);
		$this->load->view('Template/FooterAdmin');	
	}

}