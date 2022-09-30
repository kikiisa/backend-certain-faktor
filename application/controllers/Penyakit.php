<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

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
		$this->load->view("penyakit/v_penyakit",[
            'data' => $this->db->get("tb_penyakit")
        ]);
	}

	public function tambah()
	{
        
		$this->load->view("penyakit/v_tambah");
	}

    public function edit($id)
    {

        $this->load->view('penyakit/v_edit',[
            'data' => $this->db->get_where('tb_penyakit',['id_penyakit' => $id])
        ]);
    }

    public function store()
    {
        if(isset($_POST["save"]))
        {
            $this->db->insert("tb_penyakit",['nama_penyakit' => $_POST["penyakit"],'description' => $_POST["desc"]]);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Penyakit Berhasil Di Tambahkan !</div>");
            return redirect('data-penyakit'); 
        }
        if(isset($_POST["edit"]))
        {
            $id = $_POST["id"];
            
            $this->db->where("id_penyakit",$id);
            $this->db->update("tb_penyakit",["nama_penyakit" => $_POST["penyakit"],'description' => $_POST["desc"]]);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Penyakit Berhasil Di Update !</div>");
            return redirect('data-penyakit'); 
        }
        if(isset($_POST["delete"]))
        {
            $id = $_POST["id"];
            
            $this->db->where("id_penyakit",$id);
            $this->db->delete("tb_penyakit");
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Penyakit Berhasil Di Hapus !</div>");
            return redirect('data-penyakit'); 
        }
    }
}
