<?php
/**
 * 
 */
class M_akun extends CI_Model
{
	private $table = 'user';
	private $id	   = 'user.id';

	public function tambah_akun($data){
		return $this->db->insert($this->table,$data);
	}

	public function update_akun($data,$id){
		$this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
	}

	public function hapus_akun($id){
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