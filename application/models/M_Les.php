<?php

/**
 * 
 */
class M_les extends CI_Model
{

	private $table = 'tb_les';
	private $id	   = 'tb_les.id';
	
	public function noPendaftaran(){
		$this->db->select_max('no_pendaftar');
		$auto = $this->db->get('tb_les');

		return $auto->result_array();
	}


	public function tambah_les($data){
		return $this->db->insert($this->table,$data);
	}

	public function update_les($data,$id){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
	}

	public function hapus_les($id){
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