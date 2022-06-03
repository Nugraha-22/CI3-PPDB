<?php
/**
 * 
 */
class Akun extends CI_Controller
{
	public function __construct(){
		parent::__construct();

		is_logged_in();
	}
	
	public function index(){
		$data['title'] = 'Akun - Kasih Sayang Bunda';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get('user_role')->result_array();
		$this->load->model('Role_Model','role');
		$data['akun'] = $this->role->getRole();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/Akun',$data);
		$this->load->view('Template/FooterAdmin');	
	}

	public function add(){
		$this->form_validation->set_rules('username','Nama Panggilan','required|trim',['required'=>"Nama Panggilan Tidak Boleh Kosong"]);
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
			'required' => 'Email Tidak Boleh Kosong',
			'is_unique' => 'Email Sudah Terdaftar']);

		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]',[
			'required' => 'Password Tidak Boleh Kosong',
			'min_length' => 'Password Terlalu Pendek']);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Gagal! Silahkan Cek Kembali.</div>');
			redirect('Administrator/Akun');
		}else{
			$data = [
				'username' => htmlspecialchars($this->input->post('username',TRUE)),
				'email' => htmlspecialchars($this->input->post('email',TRUE)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id'),
				'is_active' => $this->input->post('is_active'),
				'date_created' => time()		
			];

			if (!empty($_FILES['image']['name'])) {
				$image = $this->_do_upload();
				$data['image'] = $image;
			}

			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat! Akun Anda Sudah Berhasil Dibuat.</div>');
			redirect('Administrator/Akun');
		}
	}

	public function update(){
		
			$id = $this->input->post('id');
			$data = [
				'username' => htmlspecialchars($this->input->post('username',TRUE)),
				'email' => htmlspecialchars($this->input->post('email',TRUE)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id'),
				'is_active' => $this->input->post('is_active'),
				'date_created' => time()		
			];

			if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $upload = $this->M_Akun->get_by_id($id);
            if (file_exists('./assets/images/profile/'.$upload->image) && $upload->image) {
            unlink('./assets/images/profile/'.$upload->image);
            }
            $data['image'] = $image;
        }

			$this->M_Akun->update_akun($data,$id);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat! Akun Anda Sudah Berhasil Di Update.</div>');
			redirect('Administrator/Akun');
	}

	private function _do_upload(){
        $image_name = $_FILES['image']['name'];

        $config['upload_path'] 		= './assets/images/profile/';
        $config['allowed_types'] 	= 'jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            redirect('Administrator/Akun');
        }
        return $this->upload->data('file_name');
    }

    public function delete($id){
    	$upload = $this->M_Akun->get_by_id($id);
        if (file_exists('./assets/images/profile/'.$upload->image) && $upload->image) {
            unlink('./assets/images/profile/'.$upload->image);
        }
        $this->M_Akun->hapus_akun($id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Hapus.</div>');
        redirect('Administrator/Akun');
    }

}