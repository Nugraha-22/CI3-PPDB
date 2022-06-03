<?php
/**
 * 
 */
class Strukturorganisasi extends CI_Controller
{

    public function __construct(){
        parent::__construct();

        is_logged_in();
    }
    	
	public function index(){
		$data['title'] = 'Struktur Organisasi - Kasih Sayang Bunda';
		$data['strukturorganisasi'] = $this->db->get('struktur_organisasi')->result_array();
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/Struktur-Organisasi',$data);
		$this->load->view('Template/FooterAdmin');	
	}

    public function update(){
        $id   = $this->input->post('id');
        $data = array(
        'nama'  => $this->input->post('nama')
       );   
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $upload = $this->M_StrukturOrganisasi->get_by_id($id);
            if (file_exists('./assets/images/struktur_organisasi/'.$upload->image) && $upload->image) {
            unlink('./assets/images/struktur_organisasi/'.$upload->image);
            }
            $data['image'] = $image;
        }
        
        $this->M_StrukturOrganisasi->update_StrukturOrganisasi($data,$id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Update.</div>');
        redirect('Administrator/StrukturOrganisasi');
        
    }

	private function _do_upload(){
        $image_name = $_FILES['image']['name'];

        $config['upload_path'] 		= './assets/images/struktur_organisasi/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            redirect('Administrator/StrukturOrganisasi');
        }
        return $this->upload->data('file_name');
    }

}