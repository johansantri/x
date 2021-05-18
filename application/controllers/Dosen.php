<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Dosen_m");
        $this->load->library('form_validation');
    }

    public function index()
    {
       // $data["Dosen"] = $this->Dosen_m->getAll();
        //$this->load->view("dosen/list", $data);
       // var_dump($data);
        $this->load->view("dosen/makasih");
    }

    public function add()
    {

        $dosen = $this->Dosen_m;
        $validation = $this->form_validation;
        $validation->set_rules($dosen->rules());

        if ($validation->run()) {
            $dosen->save();
            $this->session->set_flashdata('msg', 'Berhasil disimpan');
            redirect('dosen');
        }

        
        $this->load->view("dosen/new_form");
    }

    public function cek(){
          $data["Dosen"] = $this->Dosen_m->getAll();
        $this->load->view("dosen/list", $data);
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('Dosen');
       
        $dosen = $this->Dosen_m;
        $validation = $this->form_validation;
        $validation->set_rules($dosen->rules());

        if ($validation->run()) {
            $dosen->update();
            $this->session->set_flashdata('msg', 'Berhasil dirubah');
            redirect('dosen');
        }

        $data["dosen"] = $dosen->getById($id);
        if (!$data["dosen"]) show_404();
        
        $this->load->view("dosen/edit_form", $data);
    }

      public function lihat($id = null)
    {
        if (!isset($id)) redirect('Dosen');
       
        $dosen = $this->Dosen_m;
        $validation = $this->form_validation;
        $validation->set_rules($dosen->rules());

        if ($validation->run()) {
            $dosen->update();
            $this->session->set_flashdata('msg', 'Berhasil dirubah');
            redirect('dosen');
        }

        $data["dosen"] = $dosen->getById($id);
        if (!$data["dosen"]) show_404();
        
        $this->load->view("dosen/lihat_form", $data);
    }


    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Dosen_m->delete($id)) {
            redirect(site_url('Dosen'));
        }
    }
}
