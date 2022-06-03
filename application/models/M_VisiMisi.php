<?php
/**
 * 
 */
class M_visimisi extends CI_Model
{
	private $table = 'visi_misi';
	private $id	   = 'visi_misi.id';

	public function update_visimisi($data,$id){
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