<?php
class Home_model extends CI_Model
{
    public function get_slider()
    {
        return $this->db->get('slider')->result();
    }

    public function addSlider($dataPost)
    {
        return $this->db->insert('slider', $dataPost);
    }

    public function get_slider_by_id($id_slider)
    {
        return $this->db->get_where('slider', ['id_slider' => $id_slider])->row();
    }

    public function update_slider_by_id($id_slider, $dataPost)
    {
        $data = $dataPost;
        if (isset($dataPost['photo']) && !empty($dataPost['photo'])) {
            $data['photo'] = $dataPost['photo'];
        }

        $this->db->where('id_slider', $id_slider);
        return $this->db->update('slider', $data);
    }
    public function delete_slider_by_id($id_slider)
    {
        $this->db->where('id_slider', $id_slider);
        return $this->db->delete('slider');
    }
}
