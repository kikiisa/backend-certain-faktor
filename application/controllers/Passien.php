<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passien extends CI_Controller {

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
            'data' => $this->db->get("tb_passien")
        ];
        $this->load->view('passien/v_passien',$data);
	}
}
