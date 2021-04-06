<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Personal_model extends CI_Model
{
    private $_table = "t_person";

    public $nomor_id;
    public $nama;
    public $no_hp;
    public $poto = "default.jpg";
    public $tentang;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'no_hp',
            'label' => 'no_hp',
            'rules' => 'numeric'],
            
            ['field' => 'tentang',
            'label' => 'tentang',
            'rules' => 'required']
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
        $this->nama = $post["nama"];
		$this->no_hp = $post["no_hp"];
		$this->poto = $this->_uploadpoto();
        $this->tentang = $post["tentang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nomor_id = $post["id"];
        $this->nama = $post["nama"];
		$this->no_hp = $post["no_hp"];
		
		
		if (!empty($_FILES["poto"]["nama"])) {
            $this->poto = $this->_uploadpoto();
        } else {
            $this->poto = $post["old_poto"];
		}

        $this->tentang = $post["tentang"];
        $this->db->update($this->_table, $this, array('nomor_id' => $post['id']));
    }

    public function delete($id)
    {
		$this->_deletepoto($id);
        return $this->db->delete($this->_table, array("nomor_id" => $id));
	}
	
	private function _uploadpoto()
	{
		$config['upload_path']          = './upload/personal/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_nama']            = $this->nomor_id;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('poto')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deletepoto($id)
	{
		$personal = $this->getById($id);
		if ($personal->poto != "default.jpg") {
			$filenama = explode(".", $personal->poto)[0];
			return array_map('unlink', glob(FCPATH."upload/personal/$filenama.*"));
		}
	}

}
