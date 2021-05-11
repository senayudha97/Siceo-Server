<?php
include_once APPPATH . "/controllers/Guide.php";

class Log_ampenan_zv_generator extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tbl_ampenan");
        is_logged_in();
    }

    public function index()
    {
        $data = [
            'title' => get_title($this->uri->segment(1)),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $this->db->order_by('tanggal_input', 'ASC');
        $this->db->where('is_delete', $this->is_delete);

        $this->db->select('*');
        $this->db->from('log_zv_generator');
        $this->db->join('user', 'user.id = log_zv_generator.insert_by');
        $data['data'] = $this->db->get('')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ampenan/log_zv_generator_view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //fixtomodel
        $data['menu'] = $this->db->get('user_menu')->result_array(); //fixtomodel

        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ampenan/log_zv_generator_add', $data);
            $this->load->view('templates/footer');
        } else {

            $arr_data = $this->input->post('input');
            $arr_multi = $this->input->post('data');
            $arr_data['tanggal_input'] = date_to_db($arr_data['tanggal_input']);

            $this->Tbl_ampenan->insert_zv_generator($arr_data);
            $this->Tbl_ampenan->auto_insert_multiple($arr_multi, 'log_zv_generator_detail');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Menambah laporan zv generator
            </div>');
            redirect('Log_ampenan_zv_generator');
        }
    }

    public function edit($param = NULL)
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('*');
        $this->db->from('log_zv_generator');
        $this->db->join('log_zv_generator_detail', 'log_zv_generator_detail.fk_zv_generator = log_zv_generator.pk_zv_generator');
        $this->db->where('pk_zv_generator', $param);
        $result = $this->db->get('')->row_array();
        $data['edit'] = $result;
        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ampenan/log_zv_generator_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['tanggal_input'] = date_to_db($input['tanggal_input']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_ampenan->update_zv_generator($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('Log_ampenan_zv_generator');
        }
    }

    public function delete($param)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Tbl_ampenan->delete_zv_generator($param, $user['id']);
        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
            redirect('Log_ampenan_zv_generator');
        } else {
            $this->flash_fail('Menghapus data');
            redirect('Log_ampenan_zv_generator');
        }
    }

    public function detail()
    {
        $data = [
            'title' => 'Log Zv Generator Detail',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ampenan/log_zv_generator_detail', $data);
        $this->load->view('templates/footer');
    }

    public function ajax()
    {
        $id = $_GET['data'];

        $result = $this->db->get_where("log_zv_generator", ['pk_zv_generator' => $id])->row_array();
        // $this->db->select('*');
        // $this->db->from('log_zv_generator');
        // $this->db->join('log_zv_generator_detail', 'log_zv_generator_detail.fk_zv_generator = log_zv_generator.pk_zv_generator');
        // $result = $this->db->get('')->row_array();

        echo json_encode($result);
    }

    public function report()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $datapost    = $this->input->post('tgl');
        // Queries
        $awal = date_to_db($datapost['awal']);
        // $akhir = date_to_db($datapost['akhir']);
        $param['log'] = $this->db->query("SELECT * FROM log_zv_generator WHERE tanggal_input = '$awal' AND is_delete = $this->is_delete ORDER BY tanggal_input ASC")->result_array();
        $param['awal']  = $awal;
        // $param['akhir'] = $akhir;
        $param['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (isset($_POST['excel'])) {
            $xl = $this->PHPExcelinit();

            $xl->getProperties()->setCreator("E-Logsheet PLN");
            $xl->getProperties()->setLastModifiedBy($user['name']);
            $xl->getProperties()->setTitle("Laporan Excel");

            // Load Excel 
            require(APPPATH . 'excel/zv_generator_excel.php');

            // Execute to download the file
            $xl->getActiveSheet()->setTitle("Laporan Excel");

            $filename = "zv_generator_rep " . date('d-m-Y') . '.xlsx';
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');

            $writer = PHPExcel_IOFactory::createWriter($xl, 'Excel2007');
            ob_end_clean();
            $writer->save('php://output');
        } else {
            // Page Config
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'tempDir' =>'/home/upk/tempPDF']);
            $mpdf->setFooter('{PAGENO}');

            // Printout
            $filename = 'Log Zv Generator' . date('d-m-Y');
            $data = $this->load->view('ampenan/log_zv_generator_rep', $param, TRUE);
            $mpdf->WriteHTML($data);
            $mpdf->Output($filename, 'I');
        }
    }
}
