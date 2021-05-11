<?php
include_once APPPATH . "/controllers/Guide.php";

class Admin_amp extends Guide
{
    var $page_dir = 'Admin_amp/';
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("Tbl_admin");
    }

    public function index()
    {
        $this->chart_niigata_generator();
    }

    public function user_mng()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 17);
        $data['menu'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user_adm/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Menu Added
            </div>');
            redirect('admin_pm/user_mng');
        }
    }


    public function verif($param)
    {
        $this->db->where('id', $param);
        $this->db->set('is_active', 1);
        $this->db->update('user');

        $this->flash_success('Verifikasi User');
        redirect($this->page_dir . '/user_mng');
    }

    public function ban($param)
    {
        $this->db->where('id', $param);
        $this->db->set('is_active', 0);
        $this->db->update('user');

        $this->flash_success('Nonaktifkan User');
        redirect($this->page_dir . '/user_mng');
    }

    // Notifikasi handler

    public function notifikasi()
    {
        $id = $this->session->userdata('id');
        $fk_id = $this->db->query("SELECT * FROM user WHERE id = $id")->row_array();
        $query = $this->db->query("SELECT * FROM notifikasi WHERE id IN (" . $fk_id['fk_notifikasi'] . ")");

        echo $query->num_rows();
    }

    public function notifikasiBody()
    {
        $id = $this->session->userdata('id');
        $fk_id = $this->db->query("SELECT * FROM user WHERE id = $id")->row_array();
        $query = $this->db->query("SELECT * FROM notifikasi WHERE id IN (" . $fk_id['fk_notifikasi'] . ")")->result_array();
        echo json_encode($query);
    }

    // Chart

    public function chart_niigata_generator()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->niigata_generator_kolom();
        $data['titleChart'] = 'Data Niigata Generator Kolom Suhu1';

        $this->form_validation->set_rules('awal', 'Awal', 'required');


        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->count($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chart($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Generator Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Generator Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartng($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartng();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_niigata_generator', $data);
        $this->load->view('templates/footer');
    }

    public function chart_ne()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->ne_kolom();
        $data['titleChart'] = 'Data Separator Niigata Engine air_pendingin_mesin Beban';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countne($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartne($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        // echo 'Fail';
                        // exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_ne');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Niigata Engine Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Niigata Engine Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartne($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartne();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_ne', $data);
        $this->load->view('templates/footer');
    }

    public function chart_cmr()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->cmr_kolom();
        $data['titleChart'] = 'Data Log Za CMR udara_start Beban';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countcmr($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartcmr($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_cmr');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Za CMR Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Za CMR Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartcmr($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartcmr();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_cmr', $data);
        $this->load->view('templates/footer');
    }

    public function chart_pa()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->pa_kolom();
        $data['titleChart'] = 'Data Log Penyulang Ampenan udara_start Beban';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countpa($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartpa($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_pa');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Penyulang Ampenan Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Penyulang Ampenan Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartpa($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartpa();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_pa', $data);
        $this->load->view('templates/footer');
    }

    public function chart_pe()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->pa_kolom();
        $data['titleChart'] = 'Data Log Pielstick Engine udara_masuk_sisi_a';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countpe($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartpe($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_pe');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Pielstick Engine Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Pielstick Engine Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartpe($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartpe();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_pe', $data);
        $this->load->view('templates/footer');
    }

    public function chart_pg()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->pg_kolom();
        $data['titleChart'] = 'Data Log Pielstick Generator tegangan';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countpg($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartpg($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_pg');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Pielstick Generator Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Pielstick Generator Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartpg($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartpg();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_pg', $data);
        $this->load->view('templates/footer');
    }

    public function chart_rs()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->rs_kolom();
        $data['titleChart'] = 'Data Log Ruston air_pendingin_jacket_water_masuk';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countrs($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartrs($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_rs');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Ruston Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Ruston Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartrs($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartrs();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_rs', $data);
        $this->load->view('templates/footer');
    }

    public function chart_ze()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->ze_kolom();
        $data['titleChart'] = 'Data Log Zav Engine tegangan';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countze($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartze($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_ze');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Zav Engine Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Zav Engine Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartze($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartze();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_ze', $data);
        $this->load->view('templates/footer');
    }

    public function chart_zg()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->zg_kolom();
        $data['titleChart'] = 'Data Log Zav Generator tegangan';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countzg($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartzg($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_zg');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Zav Generator Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Zav Generator Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartzg($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartzg();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_zg', $data);
        $this->load->view('templates/footer');
    }

    public function chart_zve()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->zve_kolom();
        $data['titleChart'] = 'Data Log Zv Engine tegangan';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countzve($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartzve($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_zve');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Zv Engine Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Zv Engine Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartzve($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartzve();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_zve', $data);
        $this->load->view('templates/footer');
    }

    public function chart_zvg()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->zvg_kolom();
        $data['titleChart'] = 'Data Log Zv Generator tegangan';

        $this->form_validation->set_rules('awal', 'Awal', 'required');

        if ($this->form_validation->run() == true) {
            $awal = date_to_db($this->input->post('awal'));
            $akhir = date_to_db($this->input->post('akhir'));
            $kolom = $this->input->post('kolom');

            if (!empty($akhir)) {
                // Penjumlahan kolom dari tiap tanggal
                $i = 0;
                $arr_get_value = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                $arr_get_waktu = array();
                while (strtotime($awal) <= strtotime($akhir)) {
                    $count = $this->Tbl_admin->countzvg($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartzvg($kolom, $awal);
                        $awal = date("Y-m-d", strtotime("+1 days", strtotime($awal)));
                        $i = 0;
                        foreach ($early as $row) {
                            $arr_get_value[$i] = $arr_get_value[$i] + $row['value'];
                            $arr_get_waktu[$i] = $row['waktu'];
                            $i++;
                        }
                    } else { // Exception redirect penolakan karena pada salah satu row terdapat data yg bertotal < 24
                        echo 'Fail';
                        exit;
                        $this->flash_fail("Pada tanggal " . content_date($awal) . " data belum berjumlah 24, Proses tidak dapat di selesaikan.");
                        redirect('admin_amp/chart_zvg');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Log Zv Generator Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Log Zv Generator Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartzvg($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartzvg();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin_amp/chart_zvg', $data);
        $this->load->view('templates/footer');
    }
}
