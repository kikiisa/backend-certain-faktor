<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		return redirect('/');
	}
	public function store()
	{
		if(isset($_POST["login"]))
		{
            $email = $this->input->post("email");
            $password = md5($this->input->post("password"));
            $check = $this->db->query("SELECT 
            * FROM tb_admin WHERE email = '$email' AND password = '$password'");
            if($check->num_rows() > 0)
            {
                $result = $check->row_array();
                $pw = $result["password"];
                if($password == $pw)
                {
                    $token = [
                        'id' => $result["id_admin"],
                        'status' => 'login',
                        'jabatan' => $result["jabatan"]
                    ];
                    $this->session->set_userdata($token);
                    return redirect('dashboard');
                }else{
                    $this->session->set_flashdata("alert","<div class='alert alert-danger'>Username atau Password Salah</div>");
                    return redirect('/');  
                }
            }else{
                $this->session->set_flashdata("alert","<div class='alert alert-danger'>Username atau Password Salah</div>");
                return redirect('/');  
            }   
		}
	}
}
