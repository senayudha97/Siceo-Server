<?php
include_once APPPATH . "/controllers/Guide.php";


class Coba extends Guide
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/coba', $data);
        $this->load->view('templates/footer');
    }

    public function chart()
    {
        $data['title'] = "Chart";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('development/chart', $data);
        $this->load->view('templates/footer');
    }

    public function ajax()
    {
        $data = $_GET['data'];

        $result = $this->db->query("SELECT * FROM user WHERE id = '$data'")->row_array();

        //contoh jika kita kirim data 1
        // echo $result['name']; 

        echo json_encode($result); //merubah format array assosiative ke JSON agar dapat di mengerti JSON
    }

    public function trigger()
    {
        $arr = ['pesan' => 'Coba Trigger', 'status' => 1, 'user' =>  $this->session->userdata('id')];
        $this->db->insert('notifikasi', $arr);
    }

    public function report($parameter)
    {
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'tempDir' =>'/home/upk/tempPDF']);

        $mpdf->setFooter('{PAGENO}');

        $param['log'] = $this->db->get('log_beban_penyulang')->result_array();
        $param['data'] = $parameter;
        $data = $this->load->view('hasilPrint', $param, TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }
}
