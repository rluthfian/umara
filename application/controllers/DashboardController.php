<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->model('Home_model');
	}
	public function index()
	{
		$slider = $this->Home_model->get_slider();

		$data = [
            'slider' => $slider
        ];
		
		return view('dashboard/index',$data);
	}
	public function dosen()
	{
		$dosens = $this->dashboard_model->dosens();
		$kaprodi = $this->dashboard_model->kaprodi();
		$data = [
			'dosens' => $dosens,
			'kaprodi' => $kaprodi,
		];

		return view('dashboard/dosen',$data);
	}

	public function about(){
		return view('dashboard/about');
	}

	public function company(){
		return view ('dashboard/company');
	}

	public function contact(){
		return view ('dashboard/contact');
	}
	
	public function produsen(){
		return view ('dashboard/detailprodusen');
	}

	public function penelitian()
	{
		return view('dashboard/penelitian');
	}
	public function pengmas()
	{
		return view('dashboard/pengmas');
	}
	public function asset_lab()
	{
		return view('dashboard/asset_lab');
	}
	public function info_publikasi()
	{
		return view('dashboard/info_publikasi');
	}
	public function arsip()
	{
		$arsip = $this->dashboard_model->arsip();
		$data = [
			'arsip' => $arsip,
		];
		return view('dashboard/arsip', $data);
	}
}
