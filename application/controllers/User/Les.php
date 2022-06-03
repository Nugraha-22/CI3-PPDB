<?php
/**
 * 
 */
class Les extends CI_Controller
{

	public function __construct(){
		parent::__construct();

		is_logged_in();
	}
	
	public function index(){
		$data['title'] = 'Les - Kasih Sayang Bunda';
		$data['nopen'] = $this->M_les->noPendaftaran();
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Template/HeaderUser',$data);
		$this->load->view('User/Les',$data);
		$this->load->view('Template/FooterUser');	
	}

	public function add(){

		$this->form_validation->set_rules('nik_anak','NIK Anak','required|trim|is_unique[tb_les.nik_anak]',[
			'required' => 'NIK Anak Tidak Boleh Kosong',
			'is_unique' => 'NIK Sudah Terdaftar']);
		$this->form_validation->set_rules('nisn','NIK Anak','required|trim|is_unique[tb_les.nisn]',[
			'required' => 'NISN Tidak Boleh Kosong',
			'is_unique' => 'NISN Sudah Terdaftar']);
		$this->form_validation->set_rules('nama_anak','Nama','trim|required',['required'=> 'Nama Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nik_anak','NIK','trim|required',['required'=> 'NIK Tidak Boleh Kosong']);
		$this->form_validation->set_rules('tgl_anak','Tanggal Lahir','trim|required',['required'=> 'Tanggal Lahir Tidak Boleh Kosong']);
		$this->form_validation->set_rules('usia','Usia','trim|required',['required'=> 'Usia Tidak Boleh Kosong']);
		$this->form_validation->set_rules('tinggi','Tinggi','trim|required',['required'=> 'Tinggi Tidak Boleh Kosong']);
		$this->form_validation->set_rules('berat_badan','Berat Badan','trim|required',['required'=> 'Berat Badan Tidak Boleh Kosong']);
		$this->form_validation->set_rules('hobi','Hobi','trim|required',['required'=> 'Hobi Tidak Boleh Kosong']);
		$this->form_validation->set_rules('cita_cita','Cita-cita','trim|required',['required'=> 'Cita-cita Tidak Boleh Kosong']);
		$this->form_validation->set_rules('jarak_rumah_sekolah','Jarak Rumah Sekolah','trim|required',['required'=> 'Jarak Rumah Sekolah Tidak Boleh Kosong']);
		$this->form_validation->set_rules('alamat','Alamat','trim|required',['required'=> 'Alamat Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nama_ayah','Nama','trim|required',['required'=> 'Nama Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nik_ayah','NIK','trim|required|min_length[16]',[
			'required'=> 'NIK Tidak Boleh Kosong',
			'min_length' => 'NIK Harus Terdiri dari 16 digit']);
		$this->form_validation->set_rules('tgl_ayah','Tanggal Lahir','trim|required',['required'=> 'Tanggal Lahir Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nama_ibu','Nama','trim|required',['required'=> 'Nama Tidak Boleh Kosong']);
		$this->form_validation->set_rules('nik_ibu','NIK','trim|required|min_length[16]',[
			'required'=> 'NIK Tidak Boleh Kosong',
			'min_length' => 'NIK Harus Terdiri dari 16 digit'
			]);
		$this->form_validation->set_rules('tgl_ibu','Tanggal Lahir','trim|required',['required'=> 'Tanggal Lahir Tidak Boleh Kosong']);
		$this->form_validation->set_rules('penghasilan','Penghasilan','trim|required',['required'=> 'Penghasilan Tidak Boleh Kosong']);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Error! Pendaftaran Telah Gagal.</div>');
				$data['title'] = 'Les - Kasih Sayang Bunda';
				$data['nopen'] = $this->M_les->noPendaftaran();
				$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
				$this->load->view('Template/HeaderUser',$data);
				$this->load->view('User/Les',$data);
				$this->load->view('Template/FooterUser');	
		}else{
			$data = [
			'no_pendaftar' => $this->input->post('no_pendaftar'),
			'nisn' => $this->input->post('nisn'),
			'nama_anak' => $this->input->post('nama_anak'),
			'nik_anak' => $this->input->post('nik_anak'),
			'tgl_anak' => $this->input->post('tgl_anak'),
			'usia' => $this->input->post('usia'),
			'agama' => $this->input->post('agama'),
			'tinggi' => $this->input->post('tinggi'),
			'berat_badan' => $this->input->post('berat_badan'),
			'hobi' => $this->input->post('hobi'),
			'cita_cita' => $this->input->post('cita_cita'),
			'jarak_rumah_sekolah' => $this->input->post('jarak_rumah_sekolah'),
			'alamat' => $this->input->post('alamat'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nik_ayah' => $this->input->post('nik_ayah'),
			'tgl_ayah' => $this->input->post('tgl_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'nik_ibu' => $this->input->post('nik_ibu'),
			'tgl_ibu' => $this->input->post('tgl_ibu'),
			'penghasilan' => $this->input->post('penghasilan')	
		];
		
		if (!empty($_FILES['kk']['name'])) {
				$image = $this->_do_upload();
				$data['kk'] = $image;
			}
		
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat! Pendaftaran Telah Berhasil.</div>');
			$this->db->insert('tb_les',$data);
			redirect('User/Les');
		}

	}

	private function _do_upload(){
        $image_name = $_FILES['kk']['name'];

        $config['upload_path'] 		= './assets/images/data/';
        $config['allowed_types'] 	= 'jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('kk')) {
            redirect('User/Les');
        }
        return $this->upload->data('file_name');
    }

}