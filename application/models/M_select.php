<?php 

class M_select extends CI_Model
{
    public function getSelect($searchTerm = "")
    {

        $fetched_records = $this->db->query("SELECT * FROM  tb_pertanyaan WHERE nama_pertanyaan LIKE '%".$searchTerm."%'");
        $users = $fetched_records->result_array();
        $data = array();
        foreach($users as $user){
            $data[] = array("text"=>$user['nama_pertanyaan']);
        }
        return $data;

    }
}


?>