<?php
include_once APPPATH . "/controllers/Guide.php";

class Log_paok_motong_formulir_tukar_piket extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_paok_motong");
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->order_by('tanggal_pemohon', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $this->db->select('*');
        $this->db->from('form_tukar_piket');
        $this->db->join('user', 'user.id = form_tukar_piket.insert_by');
        $data['data'] = $this->db->get('')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('paok_motong/log_formulir_tukar_piket', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('input[tanggal_pemohon]', 'Tanggal Pemohon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paok_motong/log_formulir_tukar_piket_add', $data);
            $this->load->view('templates/footer');
        } else {
            $arr_data = $this->input->post('input');
            $arr_data['tanggal_pemohon'] = date_to_db($arr_data['tanggal_pemohon']);

            $this->Tbl_paok_motong->insert_tukar_piket($arr_data);
            $this->flash_success('Menambah form tukar piket');
            redirect('Log_paok_motong_formulir_tukar_piket');
        }
    }
}
