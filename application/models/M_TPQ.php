<?php

/**
 * 
 */
class M_tpq extends CI_Model
{

	private $table = 'tb_tpq';
	private $id	   = 'tb_tpq.id';
	
	public function noPendaftaran(){
		$this->db->select_max('no_pendaftar');
		$auto = $this->db->get('tb_tpq');

		return $auto->result_array();
	}


	public function tambah_tpq($data){
		return $this->db->insert($this->table,$data);
	}

	public function update_tpq($data,$id){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
	}

	public function hapus_tpq($id){
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