<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("personal_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["Personal"] = $this->personal_model->getAll();
        $this->load->view("admin/personal/list", $data);
       // var_dump($data);
    }

    public function add()
    {
        $personal = $this->personal_model;
        $validation = $this->form_validation;
        $validation->set_rules($personal->rules());

        if ($validation->run()) {
            $personal->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/personal/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/Personal');
       
        $personal = $this->personal_model;
        $validation = $this->form_validation;
        $validation->set_rules($personal->rules());

        if ($validation->run()) {
            $personal->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["personal"] = $personal->getById($id);
        if (!$data["personal"]) show_404();
        
        $this->load->view("admin/personal/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->personal_model->delete($id)) {
            redirect(site_url('admin/Personal'));
        }
    }
}
