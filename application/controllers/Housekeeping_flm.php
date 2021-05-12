<?php
include_once APPPATH . "/controllers/Guide.php";

class Housekeeping_flm extends Guide
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
        $this->db->from('housekeeping_flm');
        $this->db->join('user', 'user.id = housekeeping_flm.insert_by');
        $data['data'] = $this->db->get('')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('paok_motong/housekeeping_flm_view', $data);
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
            $this->load->view('paok_motong/housekeeping_flm_add', $data);
            $this->load->view('templates/footer');
        } else {
            $arr_data = $this->input->post('input');

            // Eviden 1 Upload handler
            $namaSementara = $_FILES['eviden_1']['tmp_name'];
            $temp = explode(".", $_FILES["eviden_1"]["name"]);
            $newfilenameeviden1 = 'eviden_1_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['eviden_1']['type'];
            $this->do_upload($namaSementara, $newfilenameeviden1, $file_type);

            // Eviden 2 Upload handler
            $namaSementara = $_FILES['eviden_2']['tmp_name'];
            $temp = explode(".", $_FILES["eviden_2"]["name"]);
            $newfilenameeviden2 = 'eviden_2_' . round(microtime(true)) . '.' . end($temp);
            $file_type = $_FILES['eviden_2']['type'];
            $this->do_upload($namaSementara, $newfilenameeviden2, $file_type);

            // Join to arr_data
            $arr_data['eviden_1'] = $newfilenameeviden1;
            $arr_data['eviden_2'] = $newfilenameeviden2;

            $arr_data['tanggal_input'] = date_to_db($arr_data['tanggal_input']);
            $this->Tbl_paok_motong->insert_housekeeping_flm($arr_data);
            $this->flash_success('Menambah Housekeeping dan FLM');
            redirect('housekeeping_flm');
        }
    }

    public function edit($param = NULL)
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->where('pk_housekeeping_flm', $param);
        $data['edit'] = $this->db->get('housekeeping_flm')->row_array();
        $this->form_validation->set_rules('input[tanggal_input]', 'Tanggal Input', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paok_motong/housekeeping_flm_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $input = $this->input->post('input');
            $pk = $this->input->post('pk');
            $input['tanggal_input'] = date_to_db($input['tanggal_input']);
            $data['data'] = $input;
            $data['pk'] = $pk;

            $this->Tbl_paok_motong->update_housekeeping_flm($data);
            if ($this->db->affected_rows() == 1) {
                $this->flash_success('Merubah data');
            } else {
                $this->flash_fail('Merubah data');
            }
            redirect('housekeeping_flm');
        }
    }

    public function delete($param)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Tbl_paok_motong->delete_housekeeping_flm($param, $user['id']);
        if ($this->db->affected_rows() == 1) {
            $this->flash_success('Menghapus data');
            redirect('housekeeping_flm');
        } else {
            $this->flash_fail('Menghapus data');
            redirect('housekeeping_flm');
        }
    }

    public function ajax()
    {
        $id = $_GET['data'];


        $result = $this->db->get_where("housekeeping_flm", ['pk_housekeeping_flm' => $id])->row_array();
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
        $param['log'] = $this->db->query("SELECT * FROM housekeeping_flm WHERE tanggal_input = '$awal' AND is_delete = $this->is_delete ORDER BY tanggal_input ASC")->result_array();
        $param['awal']  = $awal;
        // $param['akhir'] = $akhir;
        $param['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (isset($_POST['excel'])) {
            $xl = $this->PHPExcelinit();

            $xl->getProperties()->setCreator("E-Logsheet PLN");
            $xl->getProperties()->setLastModifiedBy($user['name']);
            $xl->getProperties()->setTitle("Laporan Excel");

            // Load Excel 
            require(APPPATH . 'excel/housekeeping_flm_excel.php');

            // Execute to download the file
            $xl->getActiveSheet()->setTitle("Laporan Excel");

            $filename = "housekeeping_flm_rep " . date('d-m-Y') . '.xlsx';
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');

            $writer = PHPExcel_IOFactory::createWriter($xl, 'Excel2007');
            $writer->save('php://output');
        } else {
            // Page Config
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
            $mpdf->setFooter('{PAGENO}');

            // Printout
            $filename = 'housekeeping_flm' . date('d-m-Y');
            $data = $this->load->view('paok_motong/housekeeping_flm_rep', $param, TRUE);
            $mpdf->WriteHTML($data);
            $mpdf->Output($filename, 'I');
        }
    }

    function do_upload($namaSementara, $newfilename, $file_type)
    {
        $allowed = array("image/jpeg", "image/gif", "image/png");
        if (!in_array($file_type, $allowed)) {
            $error_message = 'Format File yg Anda Upload Salah';
            echo $error_message;
            exit;
        }

        $dirUpload =  './file_upload/house_keeping/';
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $newfilename);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
        } else {
            echo "Upload Gagal!";
        }
    }
}
