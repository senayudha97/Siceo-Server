<?php
include_once APPPATH . "/controllers/Guide.php";

class Admin extends Guide
{
    var $page_dir = 'admin/';
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

    public function role()
    {
        $data['title'] = "Hak Akses";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Menambah Role</div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', [
            'id' => $role_id
        ])->row_array();

        // $this->db->where('id !=' , 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Access Changed</div>');
    }

    public function roleEdit($status = NULL)
    {
        if ($status == 1) {
            $id = $_GET['id'];

            $this->db->where('id', $id);
            $result = $this->db->get('user_role')->row_array();

            echo json_encode($result);
        } else {
            $this->db->set('role', $this->input->post('role'));
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_role');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Merubah Role</div>');
            redirect('admin/role');
        }
    }

    public function roleDelete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Menghapus Role</div>');
        redirect('admin/role');
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

    public function clearNotifikasi()
    {
        $id = $_GET['data'];

        $this->db->set('fk_notifikasi', '');
        $this->db->where('id', $id);
        if ($this->db->update('user')) {
            echo 1;
        } else {
            echo 0;
        }
    }

    // Chart Ampenan
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
        $this->load->view('admin/chart_niigata_generator', $data);
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
                        redirect('admin/chart_ne');
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
        $this->load->view('admin/chart_ne', $data);
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
                        redirect('admin/chart_cmr');
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
        $this->load->view('admin/chart_cmr', $data);
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
                        redirect('admin/chart_pa');
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
        $this->load->view('admin/chart_pa', $data);
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
                        redirect('admin/chart_pe');
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
        $this->load->view('admin/chart_pe', $data);
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
                        redirect('admin/chart_pg');
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
        $this->load->view('admin/chart_pg', $data);
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
                        redirect('admin/chart_rs');
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
        $this->load->view('admin/chart_rs', $data);
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
                        redirect('admin/chart_ze');
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
        $this->load->view('admin/chart_ze', $data);
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
                        redirect('admin/chart_zg');
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
        $this->load->view('admin/chart_zg', $data);
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
                        redirect('admin/chart_zve');
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
        $this->load->view('admin/chart_zve', $data);
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
                        redirect('admin/chart_zvg');
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
        $this->load->view('admin/chart_zvg', $data);
        $this->load->view('templates/footer');
    }
}
