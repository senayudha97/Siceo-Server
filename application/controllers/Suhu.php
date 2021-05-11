<?php
include_once APPPATH . "/controllers/Guide.php";


class Suhu extends Guide
{
    var $page_dir = 'Suhu/';
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['lpmgbc'] = $this->db->get_where('suhu', ['pk' => 'lpmgbc'])->row_array();

        $data['suhu'] = $this->db->get('suhu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('suhu/index', $data);
        $this->load->view('templates/footer');
    }

    public function ajax()
    {
        $groupSuhu = $_GET['groupSuhu'];

        echo json_encode($this->db->get_where('suhu', ['pk' => $groupSuhu])->row_array());
    }

    public function edit()
    {
        $dataPost = $this->input->post('input');
        $groupSuhu = $this->input->post('pk');


        $this->db->where('pk', $groupSuhu);
        $this->db->set($dataPost);
        if ($this->db->update('suhu')) {
            $this->flash_success('Memperbarui settingan suhu');
            redirect('suhu');
        } else {
            die('Gagal');
        }
    }
}
