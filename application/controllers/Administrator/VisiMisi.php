<?php
/**
 * 
 */
class Visimisi extends CI_Controller
{

    public function __construct(){
        parent::__construct();

        is_logged_in();
    }
    	
	public function index(){
		$data['title'] = 'Visi & Misi - Kasih Sayang Bunda';
		$data['visimisi'] = $this->db->get('visi_misi')->result_array();
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/Visi-Misi',$data);
		$this->load->view('Template/FooterAdmin');	
	}

	public function update(){
        $id   = $this->input->post('id');
        $data = array(
        'nama'  => $this->input->post('nama')
       );   
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $upload = $this->M_VisiMisi->get_by_id($id);
            if (file_exists('./assets/images/visi_misi/'.$upload->image) && $upload->image) {
            unlink('./assets/images/visi_misi/'.$upload->image);
            }
            $data['image'] = $image;
        }
        
        $this->M_VisiMisi->update_visimisi($data,$id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Update.</div>');
        redirect('Administrator/VisiMisi');
        
    }

	private function _do_upload(){
        $image_name = $_FILES['image']['name'];

        $config['upload_path'] 		= './assets/images/visi_misi/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            redirect('Administrator/VisiMisi');
        }
        return $this->upload->data('file_name');
    }

}