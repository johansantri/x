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
}
