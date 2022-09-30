<?php 

class Rest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_select");
    }
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        $data = $_POST["data"];
        $extrack = json_decode($data);
        $result = [];
        foreach ($extrack as $key) {
            $data_passien[] = $key;
        }
        $total = 0;
        for ($i = 0; $i < count($data_passien);$i++){ 
            $query = $this->db->query("SELECT * FROM tb_gejala INNER JOIN tb_penyakit ON tb_gejala.id_penyakit = tb_penyakit.id_penyakit WHERE tb_gejala.nama_gejala = '{$data_passien[$i]->gejala}'");
            if($data_passien[$i]->question == 'ya')
            {
               foreach ($query->result() as $key) {
                $query2 = $this->db->query("SELECT SUM(nilai_cf) AS nilai FROM tb_gejala WHERE id_penyakit = '{$key->id_penyakit}'")->result();
                foreach($query2 as $x)
                {
                    array_push($result,[
                        'nama_gejala' => $key->nama_gejala,
                        'penyakit' => $key->nama_penyakit,
                        'nilai_cf' => $key->nilai_cf,
                        'question' => $data_passien[$i]->question,
                        'gt' => $x->nilai,
                        'description' => $key->description
                    ]);    
                }  
            } 
            }
            
        }
        echo json_encode($result);
          
    }
    public function data_gejala()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        $query = $this->db->query("SELECT * FROM tb_gejala INNER JOIN tb_penyakit ON tb_gejala.id_penyakit = tb_penyakit.id_penyakit");
        echo json_encode($query->result());
    }

    public function data_pertanyaan()
    {
    	header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        $query = $this->db->query("SELECT DISTINCT nama_gejala FROM tb_gejala")->result();
        echo json_encode($query);
    }

    public function data_penyakit()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        $q = $this->db->query("SELECT DISTINCT nama_penyakit FROM tb_gejala INNER JOIN tb_penyakit ON tb_gejala.id_penyakit = tb_penyakit.id_penyakit")->result();
        echo json_encode($q);
    }

    public function select_gejala()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json'); 
        $searchTerm = $this->input->post('searchTerm');
        $response = $this->M_select->getSelect($searchTerm);
        echo json_encode($response);
    }

    public function artikel_penyakit()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json'); 
        $data = $this->db->get("tb_penyakit")->result();
        echo json_encode($data);
    }
    public function post_passien()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json'); 
        $data = [
            'nama_passien' => $_POST["nama"],
            'alamat_passien' => $_POST["alamat"],
            'nama_penyakit' => $_POST["penyakit"],
            'gender' => $_POST["gender"],
            'telepon' => $_POST["telepon"],
            'diagnosa_nilai' => $_POST["presentase"],
            'usia' => $_POST["umur"]
        ];   
        $this->db->insert("tb_passien",$data);
        echo json_encode([
            'status' => 'ok'
        ]);
    }    
}
?>