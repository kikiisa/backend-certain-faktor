<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

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
            'data' => $this->db->get("tb_pertanyaan")
        ];
        $this->load->view('pertanyaan/v_pertanyaan',$data);
	}
    public function tambah()
    {
        $this->load->view("pertanyaan/v_tambah");
    }
    public function edit($id)
    {
        $this->load->view("pertanyaan/v_edit",[
            'pertanyaan' => $this->db->get_where("tb_pertanyaan",["id_pertanyaan" => $id])
        ]);
    }
    public function store()
    {
        if(isset($_POST["save"]))
        {
            $data = [
                'nama_pertanyaan' => $_POST["pertanyaan"],
            ];
            $this->db->insert("tb_pertanyaan",$data);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Pertanyaan Berhasil Di Tambahkan !</div>");
            return redirect('Pertanyaan');   
        }
        
        if(isset($_POST["edit"]))
        {
            $id = $_POST["id"];

            $data = [
                'nama_pertanyaan' => $_POST["pertanyaan"],
            ];
            $this->db->where("id_pertanyaan",$id);
            $this->db->update("tb_pertanyaan",$data);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Pertanyaan Berhasil Di Ubah !</div>");
            return redirect('Pertanyaan');   
        }
        
        if(isset($_POST["delete"]))
        {
            $id = $_POST["id"];
            $this->db->where("id_pertanyaan",$id);
            $this->db->delete("tb_pertanyaan");
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Pertanyaan Berhasil Di Hapus !</div>");
            return redirect('Pertanyaan');   
        }
    }
}