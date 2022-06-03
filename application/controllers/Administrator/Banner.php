<?php
/**
 * 
 */
class Banner extends CI_Controller
{
   
    	
	public function index(){
		$data['title'] = 'Banner - Kasih Sayang Bunda';
		$data['banner'] = $this->db->get('banner')->result_array();
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Template/HeaderAdmin',$data);
		$this->load->view('Administrator/Banner',$data);
		$this->load->view('Template/FooterAdmin');	
	}

	public function add(){
		$data = [
            'judul'  => $this->input->post('judul'),
            'konten'  => $this->input->post('konten'),
        ];
        
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $data['image'] = $image;
        }
        
        $this->M_banner->tambah_banner($data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Di Tambahkan.</div>');
        redirect('Administrator/Banner');
	}

    public function update(){
        $id   = $this->input->post('id');
        $data = array(
        'judul'  => $this->input->post('judul'),
        'konten'  => $this->input->post('konten')
       );   
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $upload = $this->M_banner->get_by_id($id);
            if (file_exists('./assets/images/banner/'.$upload->image) && $upload->image) {
            unlink('./assets/images/banner/'.$upload->image);
            }
            $data['image'] = $image;
        }
        
        $this->M_banner->update_banner($data,$id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Update.</div>');
        redirect('Administrator/Banner');
        
    }

    public function delete($id){
        $upload = $this->M_banner->get_by_id($id);
        if (file_exists('./assets/images/fasilitas/'.$upload->image) && $upload->image) {
            unlink('./assets/images/banner/'.$upload->image);
        }
        $this->M_banner->hapus_banner($id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Succes! Data Berhasil di Hapus.</div>');
        redirect('Administrator/Banner');
    }

	private function _do_upload(){
        $image_name = $_FILES['image']['name'];

        $config['upload_path'] 		= './assets/images/banner/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            redirect('Administrator/Banner');
        }
        return $this->upload->data('file_name');
    }

}