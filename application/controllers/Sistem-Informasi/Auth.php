<?php
/**
 * 
 */
class Auth extends CI_Controller
{
	
	public function index(){
		$this->form_validation->set_rules('email','Email','trim|required|valid_email',['required' => 'Email Tidak Boleh Kosong']);
		$this->form_validation->set_rules('password','Password','trim|required',['required'=> 'Password Tidak Boleh Kosong']);
		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Daftar - Kasih Sayang Bunda';
			$this->load->view('Template/Header',$data);
			$this->load->view('Sistem-Informasi/Daftar');
			$this->load->view('Template/Footer');
		}else{
			$this->_login();
		}

	}


	private function _login(){
		$email =  $this->input->post('email');
		$password =  $this->input->post('password');
		
		$user =  $this->db->get_where('user',['email' => $email])->row_array();
		//jika usernya ada
		if ($user) {
			//jika usernya aktif
			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					//cek role
					if ($user['role_id'] == 1) {
						redirect('Administrator/Beranda');
					}else{
						redirect('User/Member');
					}

				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('Sistem-Informasi/Auth');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Belum Aktif!</div>');
			redirect('Sistem-Informasi/Auth');
			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
			redirect('Sistem-Informasi/Auth');
		}
			
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Log-Out!</div>');
			redirect('Sistem-Informasi/Auth');	
	}

	public function blocked(){
		$this->load->view('Blocked');
	}
	
}