<?php
class Admin_model extends CI_Model
{
    public function get_admin()
    {
        return $this->db->get('admin')->result();
    }
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    // DOSEN MODEL
    public function get_dosens()
    {
        return $this->db->get('dosens')->result();
    }
    public function addDosen($dataPost)
    {
        $data = [
            'nip' => $dataPost['nip'],
            'name' => $dataPost['name'],
            'pendidikan1' => $dataPost['pendidikan1'],
            'pendidikan2' => $dataPost['pendidikan2'],
            'email' => $dataPost['email'],
            'password' => $dataPost['password'],
            'jabatan' => $dataPost['jabatan'],
            'status' => $dataPost['status'],
            'foto' => $dataPost['foto'],
        ];


        return $this->db->insert('dosens', $data);
    }
  
    public function updateDosenById($id, $dataPost)
    {

        $data = [
            'nip' => $dataPost['nip'],
            'name' => $dataPost['name'],
            'pendidikan1' => $dataPost['pendidikan1'],
            'pendidikan2' => $dataPost['pendidikan2'],
            'email' => $dataPost['email'],
            'password' => $dataPost['password'],
            'jabatan' => $dataPost['jabatan'],
            'status' => $dataPost['status'],
        ];

        // Check if 'photo' is set in the form data
        if (isset($dataPost['foto']) && !empty($dataPost['foto'])) {
            $data['foto'] = $dataPost['foto'];
        }
        $this->db->where('id', $id);
        return $this->db->update('dosens', $data);
    }

    public function deleteDosenById($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('dosens');
    }
    // CABANG KAMI
    public function addCabangKami($dataPost)
    {
        $data = [
            'name_office' => $dataPost['name_office'],
            'full_address' => $dataPost['full_address'],
            'link_maps' => $dataPost['link_maps'],
            'photo' => $dataPost['photo']
        ];
        return $this->db->insert('branch_office', $data);
    }
    public function deleteCabangKamiById($id_office)
    {
        $this->db->where('id_office', $id_office);
        return $this->db->delete('branch_office');
    }
    public function updateCabangKamiById($id_office, $dataPost)
    {
        $data = [
            'name_office' => $dataPost['name_office'],
            'full_address' => $dataPost['full_address'],
            'link_maps' => $dataPost['link_maps'],
        ];
        // Check if 'photo' is set in the form data
        if (isset($dataPost['photo']) && !empty($dataPost['photo'])) {
            $data['photo'] = $dataPost['photo'];
        }
        $this->db->where('id_office', $id_office);
        return $this->db->update('branch_office', $data);
    }

    // CRUD TENTANG KAMI
    public function get_about()
    {
        return $this->db->get('about_us')->result();
    }
    public function get_our_team()
    {
        return $this->db->get('our_team')->result();
    }
    public function get_photo_collection()
    {
        return $this->db->get('photo_collection')->result();
    }
    public function updateAboutById($id_about, $dataPost)
    {
        $data = [
            'title' => $dataPost['title'],
            'content' => $dataPost['content'],
        ];
        // Check if 'photo' is set in the form data
        if (isset($dataPost['photo']) && !empty($dataPost['photo'])) {
            $data['photo'] = $dataPost['photo'];
        }
        $this->db->where('id_about', $id_about);
        return $this->db->update('about_us', $data);
    }
    public function addOurTeam($dataPost)
    {
        $data = [
            'name' => $dataPost['name'],
            'jabatan' => $dataPost['jabatan'],
            'content' => $dataPost['content'],
            'photo' => $dataPost['photo']
        ];
        return $this->db->insert('our_team', $data);
    }
    public function updateOurTeamById($id_team, $dataPost)
    {
        $data = [
            'name' => $dataPost['name'],
            'jabatan' => $dataPost['jabatan'],
            'content' => $dataPost['content'],
        ];
        // Check if 'photo' is set in the form data
        if (isset($dataPost['photo']) && !empty($dataPost['photo'])) {
            $data['photo'] = $dataPost['photo'];
        }
        $this->db->where('id_team', $id_team);
        return $this->db->update('our_team', $data);
    }
    public function deleteOurTeamById($id_team)
    {
        $this->db->where('id_team', $id_team);
        return $this->db->delete('our_team');
    }

    // GALLERY
    public function addGallery($dataPost)
    {
        $data = [
            'title' => $dataPost['title'],
            'photo' => $dataPost['photo']
        ];
        return $this->db->insert('photo_collection', $data);
    }
    public function updateGalleryById($id_collection, $dataPost)
    {
        $data = [
            'title' => $dataPost['title'],
        ];
        // Check if 'photo' is set in the form data
        if (isset($dataPost['photo']) && !empty($dataPost['photo'])) {
            $data['photo'] = $dataPost['photo'];
        }
        $this->db->where('id_collection', $id_collection);
        return $this->db->update('photo_collection', $data);
    }
    public function deleteGalleryById($id_collection)
    {
        $this->db->where('id_collection', $id_collection);
        return $this->db->delete('photo_collection');
    }
}
