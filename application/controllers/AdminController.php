<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('session');
		
		
	}
	public function index()
	{
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("admin/login"));
		}else{
			return view('admin/index');
		}
	}
	public function login()
	{
		$data = [
			'login_error' => $this->session->flashdata('login_error'),
		];

		return view('admin/login', $data);
	}

	// DOSEN CRUD

	// public function dosens()
	// {
	// 	$dosens = $this->admin_model->get_dosens();
	// 	$data = [
	// 		'dosens' => $dosens,
	// 		'username' => $this->session->userdata("username"),
	// 	];

	// 	return view('admin/dosens/index', $data);
	// }
	// public function addDosen()
	// {
	// 	$dataPost = $this->input->post();

	// 	if (empty($dataPost['nip']) || empty($dataPost['name']) || empty($dataPost['pendidikan1']) || empty($dataPost['pendidikan2'])|| empty($dataPost['email'])|| empty($dataPost['password'])|| empty($dataPost['jabatan'])) {
	// 		echo json_encode(['status' => 'error', 'message' => 'Harap Isi Semua Data']);
	// 		return;
	// 	}
	// 	$config['upload_path']   = './assets/images/dosens/';
	// 	$config['allowed_types'] = 'gif|jpg|png';
	// 	$config['max_size']      = 100000; // Set your desired max size in kilobytes
	// 	$this->load->library('upload', $config);

	// 	if ($this->upload->do_upload('foto')) {
	// 		$upload_data = $this->upload->data();
	// 		$file_name = $upload_data['file_name'];
	// 	} else {
	// 		echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
	// 		return;
	// 	}

	// 	$this->load->model('Admin_model');
	// 	$success = $this->Admin_model->addDosen([
	// 		'nip' => $dataPost['nip'],
	//         'name' => $dataPost['name'],
	//         'pendidikan1' => $dataPost['pendidikan1'],
	//         'pendidikan2' => $dataPost['pendidikan2'],
	//         'email' => $dataPost['email'],
	//         'password' => $dataPost['password'],
	//         'jabatan' => $dataPost['jabatan'],
	//         'status' => $dataPost['status'],
	// 		'foto' => $file_name, // Use the file name here
	// 	]);

	// 	if ($success) {
	// 		echo json_encode(['status' => 'success', 'message' => 'Dosen Add successfully']);
	// 	} else {
	// 		echo json_encode(['status' => 'error', 'message' => 'Failed to Add Dosen']);
	// 	}
	// }
	// public function editDosen($id)
	// {
	// 	$dosens = $this->admin_model->get_dosens();
	// 	$found_dosens = null;
	// 	foreach ($dosens as $dosen_item) {
	// 		if ($dosen_item->id == $id) {
	// 			$found_dosens = $dosen_item;
	// 			break; // Stop the loop once the article is found
	// 		}
	// 	}
	// 	$data = json_encode($found_dosens);
	// 	echo $data;
	// }

	// public function updateDosen($id)
	// {
	// 	$dataPost = $this->input->post();
	// 	if (empty($dataPost['nip']) || empty($dataPost['name']) || empty($dataPost['pendidikan1']) || empty($dataPost['pendidikan2'])|| empty($dataPost['email'])|| empty($dataPost['password'])|| empty($dataPost['jabatan'])) {
	// 		echo json_encode(['status' => 'error', 'message' => 'Harap Isi Semua Data']);
	// 		return;
	// 	}

	// 	$config['upload_path']   = './assets/images/dosens/';
	// 	$config['allowed_types'] = 'gif|jpg|png';
	// 	$config['max_size']      = 1024; // Set your desired max size in kilobytes
	// 	$this->load->library('upload', $config);

	// 	// Check if 'photo' index exists in $dataPost
	// 	if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'])) {
	// 		if ($this->upload->do_upload('foto')) {
	// 			$upload_data = $this->upload->data();
	// 			$file_name = $upload_data['file_name'];
	// 			$dataPost['foto'] = $file_name; // Update 'photo' in $dataPost
	// 		} else {
	// 			echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
	// 			return;
	// 		}
	// 	}

	// 	$this->load->model('Admin_model');
	// 	$success = $this->Admin_model->updateDosenById($id, $dataPost);
	// 	if ($success) {
	// 		echo json_encode(['status' => 'success', 'message' => 'Dosen updated successfully']);
	// 	} else {
	// 		echo json_encode(['status' => 'error', 'message' => 'Failed to update Dosen']);
	// 	}
	// }

	// public function deleteDosen($id)
	// {
	// 	$this->load->model('Admin_model');
	// 	$success = $this->Admin_model->deleteDosenById($id);
	// 	if ($success) {
	// 		echo json_encode(['status' => 'success']);
	// 	} else {
	// 		echo json_encode(['status' => 'error']);
	// 	}
	// }
}
