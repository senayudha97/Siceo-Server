<?php
include_once APPPATH . "/controllers/Guide.php";

class Setup_beban_penyulang extends Guide
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
        $this->db->order_by('setup_tanggal_input', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $data['data'] = $this->db->get('setup_beban_penyulang')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('paok_motong/setup_beban_penyulang_view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('input[setup_tanggal_input]', 'Tanggal Input', 'required');

        $arr_data = $this->input->post('input');
        $arr_data['setup_tanggal_input'] = date_to_db($arr_data['setup_tanggal_input']);

        $this->Tbl_paok_motong->insert_setup_beban_penyulang($arr_data);
        $this->flash_success('Menambah setup beban penyulang');
        redirect('setup_beban_penyulang');
    }

    public function edit($param = NULL)
    {
        if ($param == 1) {
            $id = $_GET['pk_setup_beban_penyulang'];

            $this->db->where('pk_setup_beban_penyulang', $id);
            $result = $this->db->get('setup_beban_penyulang')->row_array();

            echo json_encode($result);
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['setup_tanggal_input'] = date_to_db($input['setup_tanggal_input']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_paok_motong->update_setup_beban_penyulang($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('setup_beban_penyulang');
        }
    }

    public function delete($param)
    {
        $this->db->where('pk_setup_beban_penyulang', $param);
        $this->db->delete('setup_beban_penyulang');

        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
        } else {
            $this->flash_fail('Megnhapus data');
        }
        redirect('setup_beban_penyulang');
    }

    public function ajax()
    {
        $id = $_GET['data'];


        $result = $this->db->get_where("setup_beban_penyulang", ['pk_setup_beban_penyulang' => $id])->row_array();
        $result['setup_tanggal_input'] = content_date($result['setup_tanggal_input']);

        echo json_encode($result);
    }
}
