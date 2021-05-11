<?php
include_once APPPATH . "/controllers/Guide.php";

class Log_paok_motong_perjaman_mesin extends Guide
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
        $this->db->order_by('tanggal_input', 'ASC');
        $this->db->where('is_delete', $this->is_delete);

        $this->db->select('*');
        $this->db->from('log_perjaman_mesin');
        $this->db->join('user', 'user.id = log_perjaman_mesin.insert_by');
        $data['data'] = $this->db->get('')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('paok_motong/log_perjaman_mesin_view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //fixtomodel
        $data['menu'] = $this->db->get('user_menu')->result_array(); //fixtomodel
        $data['setup'] = $this->db->get('setup_perjaman_mesin')->result_array();


        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paok_motong/log_perjaman_mesin_add', $data);
            $this->load->view('templates/footer');
        } else {

            $arr_data = $this->input->post('input');
            $arr_data['tanggal_input'] = date_to_db($arr_data['tanggal_input']);
            $this->Tbl_paok_motong->notif_perjaman_mesin($arr_data, $data['user']);
            $this->Tbl_paok_motong->insert_perjaman_mesin($arr_data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Menambah laporan perjaman mesin
            </div>');
            redirect('Log_paok_motong_perjaman_mesin');
        }
    }

    public function edit($param = NULL)
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->where('pk_perjaman_mesin', $param);
        $data['edit'] = $this->db->get('log_perjaman_mesin')->row_array();
        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paok_motong/log_perjaman_mesin_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['tanggal_input'] = date_to_db($input['tanggal_input']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_paok_motong->update_perjaman_mesin($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('Log_paok_motong_perjaman_mesin');
        }
    }

    public function delete($param)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Tbl_paok_motong->delete_perjaman_mesin($param, $user['id']);
        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
            redirect('Log_paok_motong_perjaman_mesin');
        } else {
            $this->flash_fail('Menghapus data');
            redirect('Log_paok_motong_perjaman_mesin');
        }
    }

    public function ajax()
    {
        $id = $_GET['data'];

        $result = $this->db->get_where("log_perjaman_mesin", ['pk_perjaman_mesin' => $id])->row_array();

        echo json_encode($result);
    }

    public function load_mesin()
    {
        $tanggal = date_to_db($_GET['tanggal_']);
        $this->db->where('tanggal_input', $tanggal);
        $result  = $this->db->get('setup_perjaman_mesin')->result_array();

        echo json_encode($result);
    }

    public function report()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $datapost    = $this->input->post('tgl');
        // Queries
        $awal = date_to_db($datapost['awal']);
        // $akhir = date_to_db($datapost['akhir']);
        $param['log'] = $this->db->query("SELECT * FROM log_perjaman_mesin WHERE tanggal_input = '$awal'  AND is_delete = $this->is_delete ORDER BY tanggal_input ASC")->result_array();
        $param['awal']  = $awal;
        // // $param['akhir'] = $akhir;
        $param['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        if (isset($_POST['excel'])) {
            $xl = $this->PHPExcelinit();

            $xl->getProperties()->setCreator("E-Logsheet PLN");
            $xl->getProperties()->setLastModifiedBy($user['name']);
            $xl->getProperties()->setTitle("Laporan Excel");

            // Load Excel 
            require(APPPATH . 'excel/perjaman_mesin_excel.php');

            // Execute to download the file
            $xl->getActiveSheet()->setTitle("Laporan Excel");

            $filename = "Perjaman_mesin_Rep " . date('d-m-y') . '.xlsx';
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');

            $writer = PHPExcel_IOFactory::createWriter($xl, 'Excel2007');
            $writer->save('php://output');
        } else {
            // Page Config
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'tempDir' =>'/home/upk/tempPDF']);
            $mpdf->setFooter('{PAGENO}');
            // Printout
            $filename = 'Log Beban Perjaman Mesin' . date('d-m-Y');
            $data = $this->load->view('paok_motong/log_perjaman_mesin_rep', $param, TRUE);
            $mpdf->WriteHTML($data);
            $mpdf->Output($filename, 'I');
        }
    }
}
