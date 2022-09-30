<?php 

class Profile extends CI_Controller {

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
            'data' => $this->db->get_where("tb_admin",["id_admin" => $this->session->userdata("id")])
        ];
        $this->load->view('profile/v_profile',$data);
	}

    public function auth()
    {
        if(isset($_POST["auth"]))
        {
           $this->db->where("id_admin",$this->session->userdata("id"));
           $this->db->update("tb_admin",["password" => md5($_POST["password"])]);
           $this->session->set_flashdata("alert","<div class='alert alert-success'>Password berhasil di ubah !</div>");
            return redirect('Profile');
        }

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
            return redirect('Profile');   
        }
    }
}






?>