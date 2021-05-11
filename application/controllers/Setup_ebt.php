<?php
include_once APPPATH . "/controllers/Guide.php";

class Setup_ebt extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_narmada");
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('tanggal_input', 'ASC');
        $this->db->where('is_delete', $this->is_delete);
        $data['data'] = $this->db->get('setup_ebt')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ebt/setup_ebt_view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        $arr_data = $this->input->post('input');
        $arr_data['tanggal_input'] = date_to_db($arr_data['tanggal_input']);

        $this->Tbl_narmada->insert_setup_ebt($arr_data);
        $this->flash_success('Menambah setup ebt');
        redirect('setup_ebt');
    }

    public function edit($param = NULL)
    {
        if ($param == 1) {
            $id = $_GET['pk_setup_ebt'];

            $this->db->where('pk_setup_ebt', $id);
            $result = $this->db->get('setup_ebt')->row_array();

            echo json_encode($result);
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['tanggal_input'] = date_to_db($input['tanggal_input']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_narmada->update_setup_ebt($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('setup_ebt');
        }
    }

    public function delete($param)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Tbl_narmada->delete_setup_ebt($param, $user['id']);
        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
            redirect('Setup_ebt');
        } else {
            $this->flash_fail('Menghapus data');
            redirect('Setup_ebt');
        }
    }

    public function ajax()
    {
        $id = $_GET['data'];


        $result = $this->db->get_where("setup_ebt", ['pk_setup_ebt' => $id])->row_array();
        $result['tanggal_input'] = content_date($result['tanggal_input']);

        echo json_encode($result);
    }
}
