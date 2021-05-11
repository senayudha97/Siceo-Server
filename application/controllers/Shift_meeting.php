<?php
include_once APPPATH . "/controllers/Guide.php";

class Shift_meeting extends Guide
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
        $this->db->from('shift_meeting');
        $this->db->join('user', 'user.id = shift_meeting.insert_by');
        $data['data'] = $this->db->get('')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('paok_motong/shift_meeting_view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paok_motong/shift_meeting_add', $data);
            $this->load->view('templates/footer');
        } else {
            $arr_data = $this->input->post('input');
            $arr_multi = $this->input->post('data');

            $arr_data['tanggal_input'] = date_to_db($arr_data['tanggal_input']);
            $this->Tbl_paok_motong->auto_insert_multiple($arr_multi, 'shift_meeting_detail');
            $this->Tbl_paok_motong->insert_shift_meeting($arr_data);
            $this->flash_success('Menambah Shift Meeting');
            redirect('Shift_meeting');
        }
    }

    public function edit($param = NULL)
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->where('pk_shift_meeting', $param);
        $data['edit'] = $this->db->get('shift_meeting')->row_array();
        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paok_motong/shift_meeting_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['tanggal_input'] = date_to_db($input['tanggal_input']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_paok_motong->update_shift_meeting($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('Shift_meeting');
        }
    }

    public function delete($param)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Tbl_paok_motong->delete_shift_meeting($param, $user['id']);
        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
            redirect('Shift_meeting');
        } else {
            $this->flash_fail('Menghapus data');
            redirect('Shift_meeting');
        }
    }

    public function ajax()
    {
        $id = $_GET['data'];


        $result = $this->db->get_where("shift_meeting", ['pk_shift_meeting' => $id])->row_array();
        // $result = $this->db->query("SELECT sikur FROM log_beban_penyulang WHERE pk_beban_penyulang = '$id'")->row_array();

        echo json_encode($result);
    }

    public function report()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $datapost    = $this->input->post('tgl');
        // Queries
        $awal = date_to_db($datapost['awal']);
        // $akhir = date_to_db($datapost['akhir']);
        $param['log'] = $this->db->query("SELECT * FROM shift_meeting WHERE tanggal_input = '$awal' AND is_delete = $this->is_delete ORDER BY tanggal_input ASC")->result_array();
        $param['awal']  = $awal;
        // $param['akhir'] = $akhir;
        $param['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (isset($_POST['excel'])) {
            $xl = $this->PHPExcelinit();

            $xl->getProperties()->setCreator("E-Logsheet PLN");
            $xl->getProperties()->setLastModifiedBy($user['name']);
            $xl->getProperties()->setTitle("Laporan Excel");

            // Load Excel 
            require(APPPATH . 'excel/shift_meeting_excel.php');

            // Execute to download the file
            $xl->getActiveSheet()->setTitle("Laporan Excel");

            $filename = "shift_meeting_rep " . date('d-m-Y') . '.xlsx';
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
            $filename = 'Shift_meeting' . date('d-m-Y');
            $data = $this->load->view('paok_motong/shift_meeting_rep', $param, TRUE);
            $mpdf->WriteHTML($data);
            $mpdf->Output($filename, 'I');
        }
    }
}
