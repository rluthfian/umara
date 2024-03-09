<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminHomeController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('session');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("admin/login"));
        }
    }

    function index()
    {
        $home = $this->Home_model->get_slider();

        $data = [
            'home' => $home
        ];

        return view('admin/cms/home/index', $data);
    }

    public function addSlider()
    {
        $dataPost = $this->input->post();

        if (empty($dataPost['order_number']) || empty($dataPost['title']) || empty($dataPost['content'])) {
            echo json_encode(['status' => 'error', 'message' => 'Harap Isi Semua Data']);
            return;
        }
        $config['upload_path']   = './assets/images/cms/home';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 100000;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('photo')) {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
        } else {
            echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
            return;
        }

        $success = $this->Home_model->addSlider([
            'order_number' => $dataPost['order_number'],
            'title' => $dataPost['title'],
            'content' => $dataPost['content'],
            'photo' => $file_name,
        ]);

        if ($success) {
            echo json_encode(['status' => 'success', 'message' => 'Slider Add successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to Add Slider ']);
        }
    }

    public function editSlider($id_slider)
    {
        $found_slider = $this->Home_model->get_slider_by_id($id_slider);

        if ($found_slider) {
            echo json_encode($found_slider);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Slider not found']);
        }
    }

    public function updateSlider($id_slider)
    {
        $dataPost = $this->input->post();
        if (empty($dataPost['order_number']) || empty($dataPost['title']) || empty($dataPost['content'])) {
            echo json_encode(['status' => 'error', 'message' => 'Harap Isi Semua Data']);
            return;
        }

        $config['upload_path']   = './assets/images/cms/home/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 1024; // Set your desired max size in kilobytes
        $this->load->library('upload', $config);

        // Check if 'photo' index exists in $dataPost
        if (isset($_FILES['photo']) && !empty($_FILES['photo']['name'])) {
            if ($this->upload->do_upload('photo')) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $dataPost['photo'] = $file_name; // Update 'photo' in $dataPost
            } else {
                echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
                return;
            }
        }

        $success = $this->Home_model->update_slider_by_id($id_slider, $dataPost);
        if ($success) {
            echo json_encode(['status' => 'success', 'message' => 'Slider updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update Slider']);
        }
    }

    public function deleteSlider($id_slider)
    {
        $success = $this->Home_model->delete_slider_by_id($id_slider);
        if ($success) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
}
