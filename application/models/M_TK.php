<?php

/**
 * 
 */
class M_tk extends CI_Model
{

	private $table = 'tb_tk';
	private $id	   = 'tb_tk.id';
	
	public function noPendaftaran(){
		$this->db->select_max('no_pendaftar');
		$auto = $this->db->get('tb_tk');

		return $auto->result_array();
	}


	public function tambah_tk($data){
		return $this->db->insert($this->table,$data);
	}

	public function update_tk($data,$id){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
	}

	public function hapus_tk($id){
		$this->db->where($this->id,$id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();	
	}

	public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }
}