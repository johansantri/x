<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->model("personal_model");
        $this->load->library('form_validation');
    }
	public function index()
	{

		 $data["Personal"] = $this->personal_model->getAll();
		$this->load->view('dasbor',$data);
	}
	public function cariKey($key=null)
	{
		if (!empty($key=$this->input->post('key',TRUE))) {
			
			$store=$this->personal_model->set($key);
			 header('Content-Type: application/json');
			echo json_encode($store);
	}else{
		 $data["Personal"] = $this->personal_model->getAll();
		$this->load->view('dasbor',$data);
	}
}
}
