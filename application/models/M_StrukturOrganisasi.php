<?php
/**
 * 
 */
class M_strukturorganisasi extends CI_Model
{
	private $table = 'struktur_organisasi';
	private $id	   = 'struktur_organisasi.id';

	public function update_strukturorganisasi($data,$id){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

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