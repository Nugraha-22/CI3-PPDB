<?php
/**
 * 
 */
class M_kegiatan extends CI_Model
{
	private $table = 'kegiatan';
	private $id	   = 'kegiatan.id';

	public function tambah_kegiatan($data){
		return $this->db->insert($this->table,$data);
	}

	public function update_kegiatan($data,$id){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
	}

	public function hapus_kegiatan($id){
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