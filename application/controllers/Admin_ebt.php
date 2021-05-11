<?php
include_once APPPATH . "/controllers/Guide.php";

class Admin_ebt extends Guide
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("Tbl_admin");
    }

    public function index()
    {
        $this->chart_bebanpenyulang();
    }

    public function user_mng()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id >=', 8);
        $this->db->where('role_id <=', 13);
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


    public function niigata_generator()
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
                $data['arr_generator'] = $this->Tbl_admin->chart($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schart();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function chart_bebanpenyulang()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->beban_penyulang_kolom();
        $data['titleChart'] = 'Data Beban Penyulang Kolom Sikur';

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
                    $count = $this->Tbl_admin->countbp($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartbp($kolom, $awal);
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
                $data['titleChart'] = 'Data Beban Penyulang Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Beban Penyulang Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartbp($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartbp();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/chart_bebanpenyulang', $data);
        $this->load->view('templates/footer');
    }

    public function chart_perjamanMesin()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->perjaman_mesin_kolom();
        $data['titleChart'] = 'Data Perjaman Mesin Kolom Gas1';

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
                    $count = $this->Tbl_admin->countpm($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartpm($kolom, $awal);
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
                $data['titleChart'] = 'Data Perjaman Mesin Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Perjaman Mesin Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartpm($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartpm();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/chart_perjamanMesin', $data);
        $this->load->view('templates/footer');
    }

    public function chart_perjamanMesin_generator()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->perjaman_mesin_generator_kolom();
        $data['titleChart'] = 'Data Perjaman Mesin Generator Kolom Input Volt 1';

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
                    $count = $this->Tbl_admin->countpmg($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartpmg($kolom, $awal);
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
                        redirect('admin/chart_perjamanMesin_generator');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Perjaman Mesin Generator Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Perjaman Mesin Generator Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartpmg($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartpmg();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/chart_perjamanMesin_generator', $data);
        $this->load->view('templates/footer');
    }

    public function chart_boosterModule()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->perjaman_booster_module_kolom();
        $data['titleChart'] = 'Data Booster Module Kolom Beban';

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
                    $count = $this->Tbl_admin->countbm($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartbm($kolom, $awal);
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
                        redirect('admin/chart_perjamanMesin_generator');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Booster Module Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Booster Module Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartbm($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartbm();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/chart_boosterModule', $data);
        $this->load->view('templates/footer');
    }

    public function chart_hrto()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->perjaman_hrto_kolom();
        $data['titleChart'] = 'Data HRTO thermal_hrto1_in Beban';

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
                    $count = $this->Tbl_admin->counthrto($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->charthrto($kolom, $awal);
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
                        redirect('admin/chart_perjamanMesin_generator');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data HRTO Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data HRTO Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->charthrto($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->scharthrto();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/chart_hrto', $data);
        $this->load->view('templates/footer');
    }

    public function chart_pab()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->perjaman_pab_kolom();
        $data['titleChart'] = 'Data Penyulang Analog & Battery thermal_hrto1_in Beban';

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
                    $count = $this->Tbl_admin->countpab($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartpab($kolom, $awal);
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
                        redirect('admin/chart_perjamanMesin_generator');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Penyulang Analog & Battery Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Penyulang Analog & Battery Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartpab($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartpab();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/chart_pab', $data);
        $this->load->view('templates/footer');
    }

    public function chart_mfo()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kolom'] = $this->perjaman_mfo_kolom();
        $data['titleChart'] = 'Data Separator MFO thermal_hrto1_in Beban';

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
                    $count = $this->Tbl_admin->countmfo($kolom, $awal);
                    if ($count['total'] == 24) {
                        $early = $this->Tbl_admin->chartmfo($kolom, $awal);
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
                        redirect('admin/chart_perjamanMesin_generator');
                        exit;
                    }
                }
                $data['arr_value'] = $arr_get_value;
                $data['arr_waktu'] = $arr_get_waktu;
                $data['titleChart'] = 'Data Separator MFO Kolom ' . $kolom . ' dari tanggal ' . content_date($awal) . ' sampai ' . content_date($akhir);
                $data['filter'] = true;
            } else {
                $data['titleChart'] = 'Data Separator MFO Kolom ' . $kolom;
                $data['arr_generator'] = $this->Tbl_admin->chartmfo($kolom, $awal);
                $data['filter'] = false;
            }
        } else {
            $data['arr_generator'] = $this->Tbl_admin->schartmfo();
            $data['filter'] = false;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/chart_mfo', $data);
        $this->load->view('templates/footer');
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
}
