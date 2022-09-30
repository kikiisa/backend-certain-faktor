<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != 'login')
        {
            redirect('/');
        }
    }
	public function index()
	{
        $data = [
            'data' => $this->db->query("SELECT * FROM tb_gejala INNER JOIN tb_penyakit ON tb_gejala.id_penyakit = tb_penyakit.id_penyakit"),
        ];
        $this->load->view('gejala/v_gejala',$data);
	}
    public function tambah()
    {
        $this->load->view("gejala/v_tambah",[
            'penyakit' => $this->db->get("tb_penyakit")->result()
        ]);
    }

    public function edit($id)
    {
        $data = [
            'penyakit' => $this->db->get("tb_penyakit")->result(),
            'data' => $this->db->query("SELECT * FROM tb_gejala INNER JOIN tb_penyakit ON tb_gejala.id_penyakit = tb_penyakit.id_penyakit WHERE tb_gejala.id_gejala = '$id'")
        ];
        $this->load->view("gejala/v_edit",$data);
    }


    public function store()
    {
        if(isset($_POST["save"]))
        {
            $data = [
                'nama_gejala' => $_POST["gejala"],
                'nilai_cf' => $_POST["nilai"], 
                'id_penyakit' => $_POST["id_penyakit"] 
            ];
            $this->db->insert("tb_gejala",$data);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Gejala Berhasil Di Tambahkan !</div>");
            return redirect('data-gejala');   
        }
        
        if(isset($_POST["edit"]))
        {
            $id = $_POST["id"];

            $data = [
                'nama_gejala' => $_POST["gejala"],
                'nilai_cf' => $_POST["nilai"], 
                'id_penyakit' => $_POST["id_penyakit"] 
            ];
            $this->db->where("id_gejala",$id);
            $this->db->update("tb_gejala",$data);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Gejala Berhasil Di Ubah !</div>");
            return redirect('data-gejala');   
        }
        
        if(isset($_POST["delete"]))
        {
            $id = $_POST["id"];
            $this->db->where("id_gejala",$id);
            $this->db->delete("tb_gejala");
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Gejala Berhasil Di Hapus !</div>");
            return redirect('data-gejala');   
        }
    }
}
