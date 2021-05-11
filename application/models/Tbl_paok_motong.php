<?php
include_once "Gg_model.php";


class Tbl_paok_motong extends Gg_model
{
    // Insert
    public function insert_beban_penyulang($arr_data = NULL, $table = "log_beban_penyulang")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_perjaman_mesin_generator($arr_data = NULL, $table = "log_perjaman_mesin_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_perjaman_mesin($arr_data = NULL, $table = "log_perjaman_mesin")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_beban_penyulang($arr_data = NULL, $table = "setup_beban_penyulang")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_perjaman_mesin($arr_data = NULL, $table = "setup_perjaman_mesin")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_perjaman_mesin_generator($arr_data = NULL, $table = "setup_perjaman_mesin_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_checklist($arr_data = NULL, $table = "log_paok_motong_checklist")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_separator_mfo($arr_data = NULL, $table = "log_separator_mfo")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_booster_module($arr_data = NULL, $table = "log_booster_module")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_penyulang_analog_bateray($arr_data = NULL, $table = "log_penyulang_analog_bateray")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_hrto($arr_data = NULL, $table = "log_hrto")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_shift_meeting($arr_data = NULL, $table = "shift_meeting")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_tukar_piket($arr_data = NULL, $table = "form_tukar_piket")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_housekeeping_flm($arr_data = NULL, $table = "housekeeping_flm")
    {
        $this->auto_insert($arr_data, $table);
    }


    // Delete
    public function delete_beban_penyulang($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_beban_penyulang";
        $sql['pk'] = "pk_beban_penyulang";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_perjaman_mesin($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_perjaman_mesin";
        $sql['pk'] = "pk_perjaman_mesin";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_perjaman_generatorn($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_perjaman_mesin_generator";
        $sql['pk'] = "pk_perjaman_mesin_generator";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_checklist($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_paok_motong_checklist";
        $sql['pk'] = "pk_checklist";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_separator_mfo($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_separator_mfo";
        $sql['pk'] = "pk_separator_mfo";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_booster_module($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_booster_module";
        $sql['pk'] = "pk_booster_module";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_penyulang_analog_bateray($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_penyulang_analog_bateray";
        $sql['pk'] = "pk_penyulang_analog_bateray";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_hrto($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_hrto";
        $sql['pk'] = "pk_hrto";
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_shift_meeting($param = NULL, $user = NULL)
    {
        $sql['table'] = "shift_meeting";
        $sql['pk'] = "pk_shift_meeting";
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_housekeeping_flm($param = NULL, $user = NULL)
    {
        $sql['table'] = "housekeeping_flm";
        $sql['pk'] = "pk_housekeeping_flm";
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    // Update
    public function update_beban_penyulang($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_beban_penyulang');
    }

    public function update_perjaman_mesin($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_perjaman_mesin');
    }

    public function update_perjaman_mesin_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_perjaman_mesin_generator');
    }

    public function update_setup_perjaman_mesin($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_perjaman_mesin');
    }

    public function update_setup_beban_penyulang($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_beban_penyulang');
    }

    public function update_setup_perjaman_mesin_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_perjaman_mesin_generator');
    }

    public function update_checklist($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_paok_motong_checklist');
    }

    public function update_separator_mfo($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_separator_mfo');
    }

    public function update_booster_module($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_booster_module');
    }

    public function update_penyulang_analog_bateray($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_penyulang_analog_bateray');
    }

    public function update_hrto($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_hrto');
    }

    public function update_shift_meeting($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'shift_meeting');
    }

    public function update_housekeeping_flm($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'housekeeping_flm');
    }

    public function notif_perjaman_mesin($arr_post, $user)
    {
        $arr_notif = [
            'lpmapmgbcl1'    =>    $arr_post['udara_masuk_l'],
            'lpmapmgbcl2'    =>    $arr_post['udara_masuk_r'],
            'lpmapmgbcl3'    =>    $arr_post['minyak_pelumas_masuk_mesin_l'],
            'lpmapmgbcl4'    =>    $arr_post['minyak_pelumas_masuk_mesin_r'],
            'lpmapmgbcl5'    =>    $arr_post['minyak_pelumas_radiator_masuk'],
            'lpmapmgbcl6'    =>    $arr_post['minyak_pelumas_radiator_keluar'],
            'lpmum1'        =>    $arr_post['air_pendingin_mesin_masuk_l'],
            'lpmum2'        =>    $arr_post['air_pendingin_mesin_masuk_r'],
            'lpmmpmml'        =>    $arr_post['air_pendingin_radiator_masuk'],
            'lpmmpmmr'        =>    $arr_post['air_pendingin_radiator_keluar'],
            'lpmmmrm'        =>    $arr_post['air_pendingin_injektor_masuk'],
            'lpmmmrr'        =>    $arr_post['air_pendingin_injektor_keluar'],
            'lpmapmmm'        =>    $arr_post['keluar_cylinder_l_1'],
            'lpmapmmk'        =>    $arr_post['keluar_cylinder_l_2'],
            'lpmapmrm'        =>    $arr_post['keluar_cylinder_l_3'],
            'lpmapmrk'        =>    $arr_post['keluar_cylinder_l_4'],
            'lpmapmm'        =>    $arr_post['keluar_cylinder_l_5'],
            'lpmapmik'        =>    $arr_post['keluar_cylinder_l_6'],
            'lpmapmkcl1'    =>    $arr_post['keluar_cylinder_r_1'],
            'lpmapmkcl2'    =>    $arr_post['keluar_cylinder_r_2'],
            'lpmapmkcl3'    =>    $arr_post['keluar_cylinder_r_3'],
            'lpmapmkcl4'    =>    $arr_post['keluar_cylinder_r_4'],
            'lpmapmkcl5'    =>    $arr_post['keluar_cylinder_r_5'],
            'lpmapmkcl6'    =>    $arr_post['keluar_cylinder_r_6'],
            'lpmapmkcr1'    =>    $arr_post['gas_buang_cylinder_l_1'],
            'lpmapmkcr2'    =>    $arr_post['gas_buang_cylinder_l_2'],
            'lpmapmkcr3'    =>    $arr_post['gas_buang_cylinder_l_3'],
            'lpmapmkcr4'    =>    $arr_post['gas_buang_cylinder_l_4'],
            'lpmapmkcr5'    =>    $arr_post['gas_buang_cylinder_l_5'],
            'lpmapmkcr6'    =>    $arr_post['gas_buang_cylinder_l_6'],
            'lpmapmgbcr1'    =>    $arr_post['gas1'],
            'lpmapmgbcr2'    =>    $arr_post['gas2'],
            'lpmapmgbcr3'    =>    $arr_post['gas3'],
            'lpmapmgbcr4'    =>    $arr_post['gas4'],
            'lpmapmgbcr5'    =>    $arr_post['gas5'],
            'lpmapmgbcr6'    =>    $arr_post['gas6'],
            'lpmapmtmkra'    =>    $arr_post['turbo_masuk_kiri_atas'],
            'lpmapmtmkrb'    =>    $arr_post['turbo_masuk_kiri_bawah'],
            'lpmapmtmkna'    =>    $arr_post['turbo_masuk_kanan_atas'],
            'lpmapmtmknb'    =>    $arr_post['turbo_masuk_kanan_bawah'],
            'lpmapmtkkr'    =>    $arr_post['turbo_keluar_kiri'],
            'lpmapmtkkn'    =>    $arr_post['turbo_keluar_kanan'],
            'lpmtb1'    =>    $arr_post['bearing1'],
            'lpmtb2'    =>    $arr_post['bearing2'],
            'lpmtb3'    =>    $arr_post['bearing3'],
            'lpmtb4'    =>    $arr_post['bearing4'],
            'lpmtb5'    =>    $arr_post['bearing5'],
            'lpmtb6'    =>    $arr_post['bearing6'],
            'lpmtb7'    =>    $arr_post['bearing7'],
            'lpmtb8'    =>    $arr_post['bearing8'],
        ];
        $this->db->where('group', 'Log Perjaman Mesin');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                // echo $pk;
                // echo '<br>';
                $pesan = "Input Perjaman Mesin2:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
                $date = date('l, j F Y');
                if (
                    $this->db->insert('notifikasi', ['id' => $pk, 'pesan' => $pesan, 'date' => $date])
                ) {
                    $fk_notif[$y] = $pk;
                    $y++;
                }
            }
            $i++;
        }

        $fk_notif = implode(",", $fk_notif);

        $this->db->where_in('role_id', [5, 15, 16]);
        $dataUser = $this->db->get('user')->result_array();
        foreach ($dataUser as $row) {
            if (empty($row['fk_notifikasi'])) {
                $this->db->set('fk_notifikasi', $fk_notif);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            } else {
                $new_fk = $row['fk_notifikasi'] . ',' . $fk_notif;
                $this->db->set('fk_notifikasi', $new_fk);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            }
        }
    }

    public function notif_perjaman_mesin_generator($arr_post, $user)
    {
        $arr_notif = [
            'lpmgwd1' => $arr_post['input_winding1'],
            'lpmgwd2' => $arr_post['input_winding2'],
            'lpmgwd3' => $arr_post['input_winding3'],
            'lpmgwd4' => $arr_post['input_winding4'],
            'lpmgwd5' => $arr_post['input_winding5'],
            'lpmgwd6' => $arr_post['input_winding6'],
        ];
        $this->db->where('group', 'Log Perjaman Mesin Generator');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                // echo $pk;
                // echo '<br>';
                $pesan = "Input Perjaman Mesin Generator:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
                $date = date('l, j F Y');
                if (
                    $this->db->insert('notifikasi', ['id' => $pk, 'pesan' => $pesan, 'date' => $date])
                ) {
                    $fk_notif[$y] = $pk;
                    $y++;
                }
            }
            $i++;
        }

        $fk_notif = implode(",", $fk_notif);

        $this->db->where_in('role_id', [5, 15, 16]); //Setting role yg akan dikirimi notif
        $dataUser = $this->db->get('user')->result_array();
        foreach ($dataUser as $row) {
            if (empty($row['fk_notifikasi'])) {
                $this->db->set('fk_notifikasi', $fk_notif);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            } else {
                $new_fk = $row['fk_notifikasi'] . ',' . $fk_notif;
                $this->db->set('fk_notifikasi', $new_fk);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            }
        }
    }


    public function notif_mfo($arr_post, $user)
    {
        $arr_notif = [
            'lmfopm' => $arr_post['separator1_temperature_produksi_mfo'],
            'lmfoito' => $arr_post['separator1_temperature_inlet_thermal_oil'],
            'lmfotmp250' => $arr_post['tangki250_temp'],
            'lmfotmp60' => $arr_post['tangki60_level'],
            'lmfopm2' => $arr_post['separator2_pressure_produksi_mfo'],
            'lmfoito2' => $arr_post['separator2_flow_rate_produksi_mfo'],
        ];
        $this->db->where('group', 'Log MFO');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                // echo $pk;
                // echo '<br>';
                $pesan = "Input Separator MFO:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
                $date = date('l, j F Y');
                if (
                    $this->db->insert('notifikasi', ['id' => $pk, 'pesan' => $pesan, 'date' => $date])
                ) {
                    $fk_notif[$y] = $pk;
                    $y++;
                }
            }
            $i++;
        }

        $fk_notif = implode(",", $fk_notif);

        $this->db->where_in('role_id', [5, 15, 16]); //Setting role yg akan dikirimi notif
        $dataUser = $this->db->get('user')->result_array();
        foreach ($dataUser as $row) {
            if (empty($row['fk_notifikasi'])) {
                $this->db->set('fk_notifikasi', $fk_notif);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            } else {
                $new_fk = $row['fk_notifikasi'] . ',' . $fk_notif;
                $this->db->set('fk_notifikasi', $new_fk);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            }
        }
    }

    public function notif_bm($arr_post, $user)
    {
        $arr_notif = [
            'lbmif1' => $arr_post['inlet_flow1'],
            'lbmif2' => $arr_post['inlet_flow2'],
            'lbmimt' => $arr_post['mixing_tank9'],
            'lbmih' => $arr_post['inlet_heater'],
            'lbmoh' => $arr_post['outlet_heater'],
            'lbmv' => $arr_post['viscosensor'],
            'lbrl' => $arr_post['return_line'],
            'lbfo' => $arr_post['fuel_oil'],

        ];
        $this->db->where('group', 'Log Booster Module');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                // echo $pk;
                // echo '<br>';
                $pesan = "Input Booster Module:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
                $date = date('l, j F Y');
                if (
                    $this->db->insert('notifikasi', ['id' => $pk, 'pesan' => $pesan, 'date' => $date])
                ) {
                    $fk_notif[$y] = $pk;
                    $y++;
                }
            }
            $i++;
        }

        $fk_notif = implode(",", $fk_notif);

        $this->db->where_in('role_id', [5, 15, 16]); //Setting role yg akan dikirimi notif
        $dataUser = $this->db->get('user')->result_array();
        foreach ($dataUser as $row) {
            if (empty($row['fk_notifikasi'])) {
                $this->db->set('fk_notifikasi', $fk_notif);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            } else {
                $new_fk = $row['fk_notifikasi'] . ',' . $fk_notif;
                $this->db->set('fk_notifikasi', $new_fk);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            }
        }
    }

    public function notif_hrto($arr_post, $user)
    {
        $arr_notif = [
            'lhrtotoi1'    =>    $arr_post['thermal_hrto1_in'],
            'lhrtotoo1'    =>    $arr_post['thermal_hrto1_out'],
            'lhrtotoi2'    =>    $arr_post['thermal_hrto2_in'],
            'lhrtotoo2'    =>    $arr_post['thermal_hrto2_out'],
            'lhrtocto1'    =>    $arr_post['circulation_thermal_hrto1'],
            'lhrtocto2'    =>    $arr_post['circulation_thermal_hrto2'],
            'lhrtogi2'    =>    $arr_post['gas_inlet_hrto2'],
            'lhrtogi3'    =>    $arr_post['gas_inlet_hrto3'],
            'lhrtogi4'    =>    $arr_post['gas_inlet_hrto4'],
            'lhrtogi5'    =>    $arr_post['gas_inlet_hrto5'],
            'lhrtooh'    =>    $arr_post['temperature_outlet_he'],
        ];
        $this->db->where('group', 'Log HRTO');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                // echo $pk;
                // echo '<br>';
                $pesan = "Input Booster Module:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
                $date = date('l, j F Y');
                if (
                    $this->db->insert('notifikasi', ['id' => $pk, 'pesan' => $pesan, 'date' => $date])
                ) {
                    $fk_notif[$y] = $pk;
                    $y++;
                }
            }
            $i++;
        }

        $fk_notif = implode(",", $fk_notif);

        $this->db->where_in('role_id', [5, 15, 16]); //Setting role yg akan dikirimi notif
        $dataUser = $this->db->get('user')->result_array();
        foreach ($dataUser as $row) {
            if (empty($row['fk_notifikasi'])) {
                $this->db->set('fk_notifikasi', $fk_notif);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            } else {
                $new_fk = $row['fk_notifikasi'] . ',' . $fk_notif;
                $this->db->set('fk_notifikasi', $new_fk);
                $this->db->where_in('id', $row['id']);
                $this->db->update('user');
            }
        }
    }
}
