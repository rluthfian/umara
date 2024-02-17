<?php
class Arsip_model extends CI_Model
{
    public function get_arsip()
    {
        return $this->db->get('arsip')->result();
    }
    public function addArsip($dataPost)
    {
        $data = [
            'title' => $dataPost['title'],
            'isi_arsip' => $dataPost['isi_arsip'],
            'foto' => $dataPost['foto'],
        ];


        return $this->db->insert('arsip', $data);
    }

    public function updateArsipById($id, $dataPost)
    {
        $data = [
            'title' => $dataPost['title'],
            'isi_arsip' => $dataPost['isi_arsip'],
        ];

        // Check if 'photo' is set in the form data
        if (isset($dataPost['foto']) && !empty($dataPost['foto'])) {
            $data['foto'] = $dataPost['foto'];
        }
        $this->db->where('id_arsip', $id);
        return $this->db->update('arsip', $data);
    }

    public function deleteArsipById($id)
    {
        $this->db->where('id_arsip', $id);
        return $this->db->delete('arsip');
    }
}
