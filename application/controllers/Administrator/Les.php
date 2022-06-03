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
		$data['les'] = $this->db->get('tb_les')->result_array();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/Les',$data);
		$this->load->view('Template/FooterAdmin');
	}

	public function add(){

		$this->form_validation->set_rules('nik_anak','NIK Anak','required|trim|is_unique[tb_les.nik_anak]',[
			'required' => 'NIK Anak Tidak Boleh Kosong',
			'is_unique' => 'NIK Anak Sudah Terdaftar']);
		$this->form_validation->set_rules('nisn','NISN','required|trim|is_unique[tb_les.nik_anak]',[
			'required' => 'NISN Anak Tidak Boleh Kosong',
			'is_unique' => 'NISN Anak Sudah Terdaftar']);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Error! Pendaftaran Telah Gagal.</div>');
			redirect('Administrator/Les');
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
			redirect('Administrator/Les');
		}

	}

	public function update(){

			$id = $this->input->post('id');
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
			'penghasilan' => $this->input->post('penghasilan'),
			'status' => $this->input->post('status')	
		];
		
		if (!empty($_FILES['kk']['name'])) {
            $image = $this->_do_upload();
            $upload = $this->M_Les->get_by_id($id);
            if (file_exists('./assets/images/data/'.$upload->kk) && $upload->kk) {
            unlink('./assets/images/data/'.$upload->kk);
            }
            $data['kk'] = $image;
        }
		
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat! Pendaftaran Telah Berhasil di Update.</div>');
			$this->M_les->update_les($data,$id);
			redirect('Administrator/Les');

	}

	public function delete($id){
        $upload = $this->M_les->get_by_id($id);
        if (file_exists('./assets/images/data/'.$upload->kk) && $upload->kk) {
            unlink('./assets/images/data/'.$upload->kk);
        }
        $this->M_les->hapus_les($id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Hapus.</div>');
        redirect('Administrator/Les');
    }



	private function _do_upload(){
        $image_name = $_FILES['kk']['name'];

        $config['upload_path'] 		= './assets/images/data/';
        $config['allowed_types'] 	= 'jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('kk')) {
            redirect('Administrator/Les');
        }
        return $this->upload->data('file_name');
    }
}