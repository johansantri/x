<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_m extends CI_Model
{
    private $_table = "tb_dosen";

    public $id_dosen;
    public $nama;
    public $email;
    public $kode_pt;
    public $NIDN;
    public $universitas;
    public $karir;
    public $penelitian;
    public $matakuliah;
    public $no_hp;
    public $image = "default.jpg";
    public $fix;
     public $deskripsi_mk;
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required|max_length[100]'],

            ['field' => 'no_hp',
            'label' => 'no hp / wa',
            'rules' => 'required|max_length[30]'],

            ['field' => 'kode_pt',
            'label' => 'kode perguruan tinggi',
            'rules' => 'required'],

             ['field' => 'NIDN',
            'label' => 'NIDN atau NIDK',
            'rules' => 'required'],

            ['field' => 'universitas',
            'label' => 'universitas',
            'rules' => 'required|max_length[255]'],

             ['field' => 'matakuliah',
            'label' => 'kode - matakuliah',
            'rules' => 'required|max_length[255]'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|max_length[100]'],
            
           

            ['field' => 'karir',
            'label' => 'karir akademik yang membangakan',
            'rules' => 'required'],

            ['field' => 'penelitian',
            'label' => 'penelitian yang menonjol',
            'rules' => 'required'],

               ['field' => 'prestasi',
            'label' => 'prestasi akademik',
            'rules' => 'required'],

            ['field' => 'deskripsi_mk',
            'label' => 'deskripsi mata kuliah',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_dosen" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_dosen = uniqid();
        $this->nama = $this->security->xss_clean($post["nama"]);
        $this->no_hp = $this->security->xss_clean($post["no_hp"]);
         $this->NIDN = $this->security->xss_clean($post["NIDN"]);
        $this->email = $this->security->xss_clean($post["email"]);
        $this->kode_pt = $this->security->xss_clean($post["kode_pt"]);
        $this->karir = $this->security->xss_clean($post["karir"]);
        $this->penelitian = $this->security->xss_clean($post["penelitian"]);
        $this->matakuliah = $this->security->xss_clean($post["matakuliah"]);
         $this->prestasi = $this->security->xss_clean($post["prestasi"]);
        $this->universitas = $this->security->xss_clean($post["universitas"]);
        $this->deskripsi_mk = $post["deskripsi_mk"];
        $this->image = $this->_uploadImage();
        $this->fix ='baru';
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_dosen = $this->security->xss_clean($post["id"]);
       $this->nama = $this->security->xss_clean($post["nama"]);
        $this->no_hp = $this->security->xss_clean($post["no_hp"]);
         $this->NIDN = $this->security->xss_clean($post["NIDN"]);
        $this->email = $this->security->xss_clean($post["email"]);
        $this->kode_pt = $this->security->xss_clean($post["kode_pt"]);
        $this->karir = $this->security->xss_clean($post["karir"]);
        $this->penelitian = $this->security->xss_clean($post["penelitian"]);
        $this->matakuliah = $this->security->xss_clean($post["matakuliah"]);
         $this->prestasi = $this->security->xss_clean($post["prestasi"]);
        $this->universitas = $this->security->xss_clean($post["universitas"]);
         $this->deskripsi_mk = $post["deskripsi_mk"];
        $this->fix ='edit';
        
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $this->security->xss_clean($post["old_image"]);
        }

    
        $this->db->update($this->_table, $this, array('id_dosen' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_dosen" => $id));
    }
    
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/dosen/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id_dosen;
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
        $dosen = $this->getById($id);
        if ($dosen->image != "default.jpg") {
            $filename = explode(".", $dosen->image)[0];
            return array_map('unlink', glob(FCPATH."upload/dosen/$filename.*"));
        }
    }



    public function set($key=null){         

          
         
        $this->db->select('*');

       
        $this->db->like('nama',$key);
        $this->db->or_like('no_hp',$key);
        $this->db->or_like('email',$key);
        $this->db->or_like('universitas',$key);
        $this->db->or_like('karir',$key);
        $this->db->or_like('penelitian',$key);
         $this->db->or_like('prestasi',$key);
          $this->db->or_like('NIDN',$key);
        $this->db->from('tb_dosen');
        $hasil=$this->db->get();
        //return $query->result_array(); 
         if ($hasil->num_rows()>0){
                            return $hasil->result_array();
                        } else {
                            return redirect();
                        }

         
         
        
    }
}
