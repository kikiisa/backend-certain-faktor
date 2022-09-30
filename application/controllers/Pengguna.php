<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

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
            'data' => $this->db->get("tb_admin")
        ];
        $this->load->view('pengguna/v_pengguna',$data);
	}

    public function store()
    {
        if(isset($_POST["edit"]))
        {
            $this->db->where("id_admin",$_POST["id"]);
            $this->db->update("tb_admin",[
                'username' => $_POST["username"],
                'full_name' => $_POST["nama_lengkap"],
                'email' => $_POST["email"],
                'jabatan' => $_POST["jabatan"]
            ]);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Pengguna Berhasil Di Update !</div>");
            return redirect('management-pengguna');   
        }
        if(isset($_POST["tambah"]))
        {
            $this->db->insert("tb_admin",[
                'username' => $_POST["username"],
                'full_name' => $_POST["nama_lengkap"],
                'email' => $_POST["email"],
                'jabatan' => $_POST["jabatan"],
                'password' => md5(123)
            ]);
            $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Pengguna Berhasil Di Tambahka !</div>");
            return redirect('management-pengguna');   
        }
    }
    
    public function tambah()
    {
        $this->load->view('pengguna/v_tambah');
    }
	public function edit($id)
	{
        $data = [
            'data' => $this->db->get_where("tb_admin",["id_admin" => $id])
        ];
        $this->load->view('pengguna/v_edit',$data);
	}
    
    public function utility()
    {
        if(isset($_GET["reset"]))
        {
            $id = $_GET["reset"];
            $data =  $this->db->get_where("tb_admin",["id_admin" => $id]);
            if($data->num_rows() > 0)
            {
                $this->db->where("id_admin",$id);
                $this->db->update("tb_admin",[
                    'password' => md5(12345),
                ]);
                $this->session->set_flashdata("alert","<div class='alert alert-success'>Password Di Reset dengan password default <strong>12345</strong> !</div>");
                return redirect('management-pengguna');   
            }else{
                $this->session->set_flashdata("alert","<div class='alert alert-danger'>Terjadi Kesalahan !</div>");
                return redirect('management-pengguna');   
            }
        }
        if(isset($_GET["hapus"]))
        {
            $id = $_GET["hapus"];
            $data =  $this->db->get_where("tb_admin",["id_admin" => $id]);
            if($data->num_rows() > 0)
            {
                $this->db->where("id_admin",$id);
                $this->db->delete("tb_admin");
                $this->session->set_flashdata("alert","<div class='alert alert-success'>Data Pengguna Berhasil di Hapus !</div>");
                return redirect('management-pengguna');   
            }else{
                $this->session->set_flashdata("alert","<div class='alert alert-danger'>Terjadi Kesalahan !</div>");
                return redirect('management-pengguna');   
            }
        }
    }
}
