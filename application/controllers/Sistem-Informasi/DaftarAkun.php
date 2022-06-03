<?php 
/**
 * 
 */
class Daftarakun extends CI_Controller
{
	
	public function index(){
		$data['title'] = 'Daftar Akun - Kasih Sayang Bunda';		
		$this->load->view('Template/Header',$data);
		$this->load->view('Sistem-Informasi/Daftar-Akun');
		$this->load->view('Template/Footer');	
	}

	public function Daftar(){
		$this->form_validation->set_rules('username','Nama Panggilan','required|trim',['required'=>"Nama Panggilan Tidak Boleh Kosong"]);
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
			'required' => 'Email Tidak Boleh Kosong',
			'is_unique' => 'Email Sudah Terdaftar']);

		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]',[
			'required' => 'Password Tidak Boleh Kosong',
			'min_length' => 'Password Terlalu Pendek']);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Daftar Akun - Kasih Sayang Bunda';		
			$this->load->view('Template/Header',$data);
			$this->load->view('Sistem-Informasi/Daftar-Akun');
			$this->load->view('Template/Footer');	
		}else{
			$data = [
				'username' => htmlspecialchars($this->input->post('username',TRUE)),
				'email' => htmlspecialchars($this->input->post('email',TRUE)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'image' => 'default.jpg',
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
					
			];

			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat! Akun Anda Sudah Berhasil Dibuat.</div>');
			redirect('Sistem-Informasi/Auth');
		}


	}
}