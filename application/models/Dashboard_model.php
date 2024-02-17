<?php
class Dashboard_model extends CI_Model
{
	public function kaprodi()
    {
        $this->db->where('jabatan', 'KAPRODI');
		$this->db->order_by('nip', 'DESC');
        return $this->db->get('dosens')->result();
    }
	public function dosens()
    {
        $this->db->where('jabatan', 'dosen');
		$this->db->order_by('nip', 'DESC');
        return $this->db->get('dosens')->result();
    }
	public function arsip()
    {
        return $this->db->get('arsip')->result();
    }
}
