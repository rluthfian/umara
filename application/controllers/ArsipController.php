<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArsipController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('arsip_model');
		$this->load->library('session');
	}
	public function arsip()
	{
		$arsip = $this->arsip_model->get_arsip();
		$data = [
			'arsip' => $arsip,
			'username' => $this->session->userdata("username"),
		];

		return view('admin/arsip/index', $data);
	}
	public function addArsip()
	{
		$dataPost = $this->input->post();
		
		if (empty($dataPost['title']) || empty($dataPost['isi_arsip'])) {
			echo json_encode(['status' => 'error', 'message' => 'Harap Isi Semua Data']);
			return;
		}
		$config['upload_path']   = './assets/images/arsip/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 100000; // Set your desired max size in kilobytes
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];
		} else {
			echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
			return;
		}

		$this->load->model('Arsip_model');
		$success = $this->Arsip_model->addArsip([
			'title' => $dataPost['title'],
            'isi_arsip' => $dataPost['isi_arsip'],
			'foto' => $file_name,
		]);

		if ($success) {
			echo json_encode(['status' => 'success', 'message' => 'Arsip Add successfully']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Failed to Add Arsip']);
		}
	}
	public function editArsip($id)
	{
		$arsip = $this->arsip_model->get_arsip();
		$found_arsip = null;
		foreach ($arsip as $arsip_item) {
			if ($arsip_item->id_arsip == $id) {
				$found_arsip = $arsip_item;
				break; // Stop the loop once the article is found
			}
		}
		$data = json_encode($found_arsip);
		echo $data;
	}

	public function updateArsip($id)
	{
		$dataPost = $this->input->post();
		if (empty($dataPost['title']) || empty($dataPost['isi_arsip'])) {
			echo json_encode(['status' => 'error', 'message' => 'Harap Isi Semua Data']);
			return;
		}

		$config['upload_path']   = './assets/images/arsip/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 1024; // Set your desired max size in kilobytes
		$this->load->library('upload', $config);

		// Check if 'photo' index exists in $dataPost
		if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'])) {
			if ($this->upload->do_upload('foto')) {
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$dataPost['foto'] = $file_name; // Update 'photo' in $dataPost
			} else {
				echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
				return;
			}
		}

		
		$this->load->model('Arsip_model');
		$success = $this->Arsip_model->updateArsipById($id, $dataPost);
		
		if ($success) {
			echo json_encode(['status' => 'success', 'message' => 'Arsip updated successfully']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Failed to update Arsip']);
		}
	}

	public function deleteArsip($id)
	{
		$this->load->model('Arsip_model');
		$success = $this->Arsip_model->deleteArsipById($id);
		if ($success) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}
}
