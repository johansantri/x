<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Personal_model extends CI_Model
{
    private $_table = "t_person";

    public $nomor_id;
    public $name;
    public $email;
    public $jk;
    public $alamat;
    public $jabatan;
    public $institusi;
    public $no_hp;
    public $image = "default.jpg";
    public $tentang;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'name',
            'rules' => 'required|max_length[100]'],

            ['field' => 'no_hp',
            'label' => 'phone',
            'rules' => 'required|max_length[30]'],

            ['field' => 'jk',
            'label' => 'gender',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'address',
            'rules' => 'required|max_length[255]'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|max_length[100]'],
            
            ['field' => 'tentang',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'position',
            'rules' => 'required|max_length[200]'],

            ['field' => 'institusi',
            'label' => 'company',
            'rules' => 'required|max_length[200]']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nomor_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nomor_id = uniqid();
        $this->name = $post["name"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
        $this->jk = $post["jk"];
        $this->jabatan = $post["jabatan"];
        $this->institusi = $post["institusi"];
        $this->alamat = $post["alamat"];
        $this->image = $this->_uploadImage();
        $this->tentang = $post["tentang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nomor_id = $post["id"];
         $this->name = $post["name"];
        $this->no_hp = $post["no_hp"];
        $this->email = $post["email"];
        $this->jk   = $post["jk"];
        $this->jabatan = $post["jabatan"];
        $this->institusi = $post["institusi"];
        $this->alamat = $post["alamat"];
        
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->tentang = $post["tentang"];
        $this->db->update($this->_table, $this, array('nomor_id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("nomor_id" => $id));
    }
    
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/personal/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->nomor_id;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $personal = $this->getById($id);
        if ($personal->image != "default.jpg") {
            $filename = explode(".", $personal->image)[0];
            return array_map('unlink', glob(FCPATH."upload/personal/$filename.*"));
        }
    }

}
