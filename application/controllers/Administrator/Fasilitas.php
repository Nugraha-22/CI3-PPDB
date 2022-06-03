<?php
/**
 * 
 */
class Fasilitas extends CI_Controller
{

    public function __construct(){
        parent::__construct();

        is_logged_in();
    }
    
	public function index(){
		$data['title'] = 'Fasilitas - Kasih Sayang Bunda';
		$data['fasilitas'] = $this->db->get('fasilitas')->result_array();
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/Fasilitas',$data);
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
        
        $this->M_Fasilitas->tambah_fasilitas($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Di Tambahkan.</div>');
        redirect('Administrator/Fasilitas');
	}

    public function update(){
        $id   = $this->input->post('id');
        $data = array(
        'nama'  => $this->input->post('nama')
       );   
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $upload = $this->M_Fasilitas->get_by_id($id);
            if (file_exists('./assets/images/fasilitas/'.$upload->image) && $upload->image) {
            unlink('./assets/images/fasilitas/'.$upload->image);
            }
            $data['image'] = $image;
        }
        
        $this->M_Fasilitas->update_fasilitas($data,$id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Update.</div>');
        redirect('Administrator/Fasilitas');
        
    }

    public function delete($id){
        $upload = $this->M_Fasilitas->get_by_id($id);
        if (file_exists('./assets/images/fasilitas/'.$upload->image) && $upload->image) {
            unlink('./assets/images/fasilitas/'.$upload->image);
        }
        $this->M_Fasilitas->hapus_fasilitas($id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Hapus.</div>');
        redirect('Administrator/Fasilitas');
    }

	private function _do_upload(){
        $image_name = $_FILES['image']['name'];

        $config['upload_path'] 		= './assets/images/fasilitas/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            redirect('Administrator/Fasilitas');
        }
        return $this->upload->data('file_name');
    }


}