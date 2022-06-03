<?php
/**
 * 
 */
class Kegiatan extends CI_Controller
{

    public function __construct(){
        parent::__construct();

        is_logged_in();
    }
    	
	public function index(){
		$data['title'] = 'Kegiatan - Kasih Sayang Bunda';
		$data['kegiatan'] = $this->db->get('kegiatan')->result_array();
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/Kegiatan',$data);
		$this->load->view('Template/FooterAdmin');	
	}

	public function add(){
		$data = [
            'nama'  => $this->input->post('nama')
        ];
        
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $data['image'] = $image;
        }
        
        $this->M_Kegiatan->tambah_kegiatan($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Di Tambahkan.</div>');
        redirect('Administrator/Kegiatan');
	}

    public function update(){
        $id   = $this->input->post('id');
        $data = array(
        'nama'  => $this->input->post('nama')
       );   
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $upload = $this->M_Kegiatan->get_by_id($id);
            if (file_exists('./assets/images/kegiatan/'.$upload->image) && $upload->image) {
            unlink('./assets/images/kegiatan/'.$upload->image);
            }
            $data['image'] = $image;
        }
        
        $this->M_Kegiatan->update_kegiatan($data,$id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Update.</div>');
        redirect('Administrator/Kegiatan');
        
    }

    public function delete($id){
        $upload = $this->M_Kegiatan->get_by_id($id);
        if (file_exists('./assets/images/kegiatan/'.$upload->image) && $upload->image) {
            unlink('./assets/images/kegiatan/'.$upload->image);
        }
        $this->M_Kegiatan->hapus_kegiatan($id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Hapus.</div>');
        redirect('Administrator/Kegiatan');
    }

	private function _do_upload(){
        $image_name = $_FILES['image']['name'];

        $config['upload_path'] 		= './assets/images/kegiatan/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            redirect('Administrator/Kegiatan');
        }
        return $this->upload->data('file_name');
    }

}