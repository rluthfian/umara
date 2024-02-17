<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function aksi_login()
    {
        $this->load->model('admin_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password,
        );
        $user = $this->admin_model->cek_login("admin", $where)->num_rows();
        
        // $cek = $this->admin_model->cek_login("admin", $where)->num_rows();
        if ($user > 0) {

            $data_session = array(
                'username' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("admin/"));
        } else {
            $this->session->set_flashdata('login_error', 'Username or password is incorrect.');
            redirect(base_url("admin/login"));
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}
