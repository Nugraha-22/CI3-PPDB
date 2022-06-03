<?php
/**
 * 
 */
class M_fasilitas extends CI_Model
{
	private $table = 'fasilitas';
	private $id	   = 'fasilitas.id';

	public function tambah_fasilitas($data){
		return $this->db->insert($this->table,$data);
	}

	public function update_fasilitas($data,$id){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
	}

	public function hapus_fasilitas($id){
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