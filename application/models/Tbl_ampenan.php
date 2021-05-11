<?php
include_once "Gg_model.php";

class Tbl_ampenan extends Gg_model
{
    public function insert_niigata_engine($arr_data = NULL, $table = "log_niigata_engine")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_niigata_generator($arr_data = NULL, $table = "log_niigata_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_zav_generator($arr_data = NULL, $table = "log_zav_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_zv_pltd($arr_data = NULL, $table = "log_zv_pltd")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_zv_generator($arr_data = NULL, $table = "log_zv_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_niigata_engine($arr_data = NULL, $table = "setup_niigata_engine")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_niigata_generator($arr_data = NULL, $table = "setup_niigata_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_zav_generator($arr_data = NULL, $table = "setup_zav_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_zv_generator($arr_data = NULL, $table = "setup_zv_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_zv_pltd_ampenan($arr_data = NULL, $table = "setup_zv_pltd_ampenan")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_zav_engine($arr_data = NULL, $table = "log_zav_engine")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_za_cmr($arr_data = NULL, $table = "log_za_cmr")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_penyulang_ampenan($arr_data = NULL, $table = "log_penyulang_ampenan")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_pielstick_engine($arr_data = NULL, $table = "log_pielstick_engine")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_pielstick_generator($arr_data = NULL, $table = "log_pielstick_generator")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_ruston($arr_data = NULL, $table = "log_ruston")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_penyulang_taman($arr_data = NULL, $table = "log_penyulang_taman")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_shift_meeting_maturiti($arr_data = NULL, $table = "shift_meeting_maturiti")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_blanko_serah_terima_jaga($arr_data = NULL, $table = "blanko_serah_terima_jaga")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_checklist_persiapan_operasi($arr_data = NULL, $table = "checklist_persiapan_operasi")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_checklist_start_mesin($arr_data = NULL, $table = "checklist_start_mesin")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_checklist_stop_mesin($arr_data = NULL, $table = "checklist_stop_mesin")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_patrol_check_mesin($arr_data = NULL, $table = "patrol_check_mesin")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_patrol_check_auxiliaries($arr_data = NULL, $table = "patrol_check_auxiliaries")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function delete_niigata_engine($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_niigata_engine";
        $sql['pk'] = "pk_niigata_engine";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_niigata_generator($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_niigata_generator";
        $sql['pk'] = "pk_niigata_generator";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_zav_generator($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_zav_generator";
        $sql['pk'] = "pk_zav_generator";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_zv_pltd($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_zv_pltd";
        $sql['pk'] = "pk_zv_pltd";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_zv_generator($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_zv_generator";
        $sql['pk'] = "pk_zv_generator";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_zav_engine($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_zav_engine";
        $sql['pk'] = "pk_zav_engine";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_za_cmr($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_za_cmr";
        $sql['pk'] = "pk_za_cmr";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_penyulang_ampenan($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_penyulang_ampenan";
        $sql['pk'] = "pk_penyulang_ampenan";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_pielstick_engine($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_pielstick_engine";
        $sql['pk'] = "pk_pielstick_engine";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_pielstick_generator($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_pielstick_generator";
        $sql['pk'] = "pk_pielstick_generator";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_ruston($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_ruston";
        $sql['pk'] = "pk_ruston";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_penyulang_taman($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_penyulang_taman";
        $sql['pk'] = "pk_penyulang_taman";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_shift_meeting_maturiti($param = NULL, $user = NULL)
    {
        $sql['table'] = "shift_meeting_maturiti";
        $sql['pk'] = "pk_shift_maturiti";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_blanko_serah_terima_jaga($param = NULL, $user = NULL)
    {
        $sql['table'] = "blanko_serah_terima_jaga";
        $sql['pk'] = "pk_blanko_serah_terima_jaga";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_checklist_persiapan_operasi($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_persiapan_operasi";
        $sql['pk'] = "pk_checklist_persiapan_operasi";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_checklist_start_mesin($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_start_mesin";
        $sql['pk'] = "pk_checklist_start_mesin";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_checklist_stop_mesin($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_stop_mesin";
        $sql['pk'] = "pk_checklist_stop_mesin";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_patrol_check_mesin($param = NULL, $user = NULL)
    {
        $sql['table'] = "patrol_check_mesin";
        $sql['pk'] = "pk_patrol_check_mesin";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_patrol_check_auxiliaries($param = NULL, $user = NULL)
    {
        $sql['table'] = "patrol_check_auxiliaries";
        $sql['pk'] = "pk_patrol_check_auxiliaries";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function update_niigata_engine($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_niigata_engine');
    }

    public function update_niigata_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_niigata_generator');
    }

    public function update_zav_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_zav_generator');
    }

    public function update_zv_pltd($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_zv_pltd');
    }

    public function update_zv_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_zv_generator');
    }

    public function update_setup_niigata_engine($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_niigata_engine');
    }

    public function update_setup_niigata_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_niigata_generator');
    }

    public function update_setup_zav_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_zav_generator');
    }

    public function update_setup_zv_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_zv_generator');
    }

    public function update_setup_zv_pltd_ampenan($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_zv_pltd_ampenan');
    }

    public function update_zav_engine($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_zav_engine');
    }

    public function update_za_cmr($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_za_cmr');
    }

    public function update_penyulang_ampenan($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_penyulang_ampenan');
    }

    public function update_pielstick_engine($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_pielstick_engine');
    }

    public function update_pielstick_generator($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_pielstick_generator');
    }

    public function update_ruston($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_ruston');
    }

    public function update_penyulang_taman($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_penyulang_taman');
    }

    public function update_shift_meeting_maturiti($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'shift_meeting_maturiti');
    }

    public function update_blanko_serah_terima_jaga($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'blanko_serah_terima_jaga');
    }

    public function update_checklist_persiapan_operasi($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_persiapan_operasi');
    }

    public function update_checklist_start_mesin($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_start_mesin');
    }

    public function update_checklist_stop_mesin($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_stop_mesin');
    }

    public function update_patrol_check_mesin($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'patrol_check_mesin');
    }

    public function update_patrol_check_auxiliaries($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'patrol_check_auxiliaries');
    }

    // Handler Notifikasi

    public function notif_za_cmr($arr_post, $user)
    {
        $arr_notif = [
            'lzcmrgbkssa1' => $arr_post['gas_buang_keluar_silinder_sisi_a_1'],
            'lzcmrgbkssa2' => $arr_post['gas_buang_keluar_silinder_sisi_a_2'],
            'lzcmrgbkssa3' => $arr_post['gas_buang_keluar_silinder_sisi_a_3'],
            'lzcmrgbkssa4' => $arr_post['gas_buang_keluar_silinder_sisi_a_4'],
            'lzcmrgbkssa5' => $arr_post['gas_buang_keluar_silinder_sisi_a_5'],
            'lzcmrgbkssa6' => $arr_post['gas_buang_keluar_silinder_sisi_a_6'],
            'lzcmrgbkssb1' => $arr_post['gas_buang_keluar_silinder_sisi_b_1'],
            'lzcmrgbkssb2' => $arr_post['gas_buang_keluar_silinder_sisi_b_2'],
            'lzcmrgbkssb3' => $arr_post['gas_buang_keluar_silinder_sisi_b_3'],
            'lzcmrgbkssb4' => $arr_post['gas_buang_keluar_silinder_sisi_b_4'],
            'lzcmrgbkssb5' => $arr_post['gas_buang_keluar_silinder_sisi_b_5'],
            'lzcmrgbkssb6' => $arr_post['gas_buang_keluar_silinder_sisi_b_6'],
            'lzcmrgbtam' => $arr_post['turbo_a_masuk'],
            'lzcmrgbtak' => $arr_post['turbo_a_keluar'],
            'lzcmrgbtbm' => $arr_post['turbo_b_masuk'],
            'lzcmrgbtbk' => $arr_post['turbo_b_keluar'],
            'lzcmrapm' => $arr_post['temperatur_air_pendingin_mesin'],
            'lzcmrapi' => $arr_post['temperatur_air_pendingin_injector'],
            'lzcmrmp' => $arr_post['temperatur_minyak_pelumas'],
            'lzcmrbb' => $arr_post['temperatur_bahan_bakar'],
            'lzcmrrw' => $arr_post['temperatur_raw_water'],
            'lzcmrum' => $arr_post['temperatur_udara_masuk'],
            'lzcmrgb1' => $arr_post['bearing_generator1'],
            'lzcmrgb2' => $arr_post['bearing_generator2'],
            'lzcmrtb' => $arr_post['thrust_bearing'],
            'lzcmrmb1' => $arr_post['main_bearing1'],
            'lzcmrmb2' => $arr_post['main_bearing2'],
            'lzcmrmb3' => $arr_post['main_bearing3'],
            'lzcmrmb4' => $arr_post['main_bearing4'],
            'lzcmrmb5' => $arr_post['main_bearing5'],
            'lzcmrmb6' => $arr_post['main_bearing6'],
            'lzcmrmb7' => $arr_post['main_bearing7'],
            'lzcmrstr1' => $arr_post['stator1'],
            'lzcmrstr2' => $arr_post['stator2'],
            'lzcmrstr3' => $arr_post['stator3'],
            'lzcmrstr4' => $arr_post['stator4'],
            'lzcmrstr5' => $arr_post['stator5'],
            'lzcmrstr6' => $arr_post['stator6'],
        ];
        $this->db->where('group', 'Log ZA CMR');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                // echo $pk;
                // echo '<br>';
                $pesan = "Input Za CMR:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
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

        $this->db->where_in('role_id', [5, 6, 17]); //Setting role yg akan dikirimi notif
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

    public function notif_pe($arr_post, $user)
    {
        $arr_notif = [
            'lpeumsa' => $arr_post['udara_masuk_sisi_a'],
            'lpeumsb' => $arr_post['udara_masuk_sisi_b'],
            'lpempm' => $arr_post['minyak_pelumas_masuk'],
            'lpempk' => $arr_post['minyak_pelumas_keluar'],
            'lpeapmm' => $arr_post['air_pendingin_masuk_mesin'],
            'lpeapkm' => $arr_post['air_pendingin_keluar_mesin'],
            'lpeapmcsa' => $arr_post['masuk_cooler_sisi_a'],
            'lpeapmcsb' => $arr_post['masuk_cooler_sisi_b'],
            'lpeapkcsa' => $arr_post['keluar_cooler_sisi_a'],
            'lpeapkcsb' => $arr_post['keluar_cooler_sisi_b'],
            'lpeapim' => $arr_post['injector_masuk'],
            'lpeapik' => $arr_post['injector_keluar'],
            'lpeapksa1' => $arr_post['air_pendingin_keluar_silinder_sisi_a1'],
            'lpeapksa2' => $arr_post['air_pendingin_keluar_silinder_sisi_a2'],
            'lpeapksa3' => $arr_post['air_pendingin_keluar_silinder_sisi_a3'],
            'lpeapksa4' => $arr_post['air_pendingin_keluar_silinder_sisi_a4'],
            'lpeapksa5' => $arr_post['air_pendingin_keluar_silinder_sisi_a5'],
            'lpeapksa6' => $arr_post['air_pendingin_keluar_silinder_sisi_a6'],
            'lpeapksb1' => $arr_post['air_pendingin_keluar_silinder_sisi_b1'],
            'lpeapksb2' => $arr_post['air_pendingin_keluar_silinder_sisi_b2'],
            'lpeapksb3' => $arr_post['air_pendingin_keluar_silinder_sisi_b3'],
            'lpeapksb4' => $arr_post['air_pendingin_keluar_silinder_sisi_b4'],
            'lpeapksb5' => $arr_post['air_pendingin_keluar_silinder_sisi_b5'],
            'lpeapksb6' => $arr_post['air_pendingin_keluar_silinder_sisi_b6'],
            'lpegbksa1' => $arr_post['gas_buang_keluar_silinder_sisi_a_1'],
            'lpegbksa2' => $arr_post['gas_buang_keluar_silinder_sisi_a_2'],
            'lpegbksa3' => $arr_post['gas_buang_keluar_silinder_sisi_a_3'],
            'lpegbksa4' => $arr_post['gas_buang_keluar_silinder_sisi_a_4'],
            'lpegbksa5' => $arr_post['gas_buang_keluar_silinder_sisi_a_5'],
            'lpegbksa6' => $arr_post['gas_buang_keluar_silinder_sisi_a_6'],
            'lpegbksb1' => $arr_post['gas_buang_keluar_silinder_sisi_b_1'],
            'lpegbksb2' => $arr_post['gas_buang_keluar_silinder_sisi_b_2'],
            'lpegbksb3' => $arr_post['gas_buang_keluar_silinder_sisi_b_3'],
            'lpegbksb4' => $arr_post['gas_buang_keluar_silinder_sisi_b_4'],
            'lpegbksb5' => $arr_post['gas_buang_keluar_silinder_sisi_b_5'],
            'lpegbksb6' => $arr_post['gas_buang_keluar_silinder_sisi_b_6'],
            'lpesr' => $arr_post['suhu_ruangan'],
        ];
        $this->db->where('group', 'Log PIELSTICK ENGINE');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                $pesan = "Input Pielstick Engine:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
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

        $this->db->where_in('role_id', [5, 6, 17]); //Setting role yg akan dikirimi notif
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

    public function notif_ruston($arr_post, $user)
    {
        $arr_notif = [
            'lrssapjwm' => $arr_post['air_pendingin_jacket_water_masuk'],
            'lrssapjwk' => $arr_post['air_pendingin_jacket_water_keluar'],
            'lrssaprwm' => $arr_post['air_pendingin_raw_water_masuk'],
            'lrssaprwk' => $arr_post['air_pendingin_raw_water_keluar'],
            'lrssmpm' => $arr_post['minyak_pelumas_masuk'],
            'lrssmpk' => $arr_post['minyak_pelumas_keluar'],
            'lrssum' => $arr_post['suhu_udara_masuk'],
            'lrssgbssa1' => $arr_post['gas_buang_silinder_sisi_a_1'],
            'lrssgbssa2' => $arr_post['gas_buang_silinder_sisi_a_2'],
            'lrssgbssa3' => $arr_post['gas_buang_silinder_sisi_a_3'],
            'lrssgbssa4' => $arr_post['gas_buang_silinder_sisi_a_4'],
            'lrssgbssb1' => $arr_post['gas_buang_silinder_sisi_b_1'],
            'lrssgbssb2' => $arr_post['gas_buang_silinder_sisi_b_2'],
            'lrssgbssb3' => $arr_post['gas_buang_silinder_sisi_b_3'],
            'lrssgbssb4' => $arr_post['gas_buang_silinder_sisi_b_4'],
            'lrssgbst1a' => $arr_post['sebelum_turbo_a1'],
            'lrssgbst2a' => $arr_post['sebelum_turbo_a2'],
            'lrssgbst3a' => $arr_post['sebelum_turbo_a3'],
            'lrssgbst4a' => $arr_post['sebelum_turbo_a4'],
            'lrssgbst1b' => $arr_post['sebelum_turbo_b1'],
            'lrssgbst2b' => $arr_post['sebelum_turbo_b2'],
            'lrssgbst3b' => $arr_post['sebelum_turbo_b3'],
            'lrssgbst4b' => $arr_post['sebelum_turbo_b4'],
            'lrssmdm' => $arr_post['minyak_disaringan_masuk'],
            'lrssmdk' => $arr_post['minyak_disaringan_keluar'],

        ];
        $this->db->where('group', 'Log RUSTON');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                $pesan = "Input Ruston :" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
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

        $this->db->where_in('role_id', [5, 6, 17]); //Setting role yg akan dikirimi notif
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

    public function notif_ne($arr_post, $user)
    {
        $arr_notif = [
            'lnebbmm' => $arr_post['bahan_bakar_mesin_masuk'],
            'lnempmm' => $arr_post['minyak_pendingin_injektor_masuk'],
            'lneapmm' => $arr_post['minyak_pendingin_injektor_keluar'],
            'lnempim' => $arr_post['air_pendingin_silinder_a_1'],
            'lnempik' => $arr_post['air_pendingin_silinder_a_2'],
            'lneapksa1a' => $arr_post['air_pendingin_silinder_a_3'],
            'lneapksa2a' => $arr_post['air_pendingin_silinder_a_4'],
            'lneapksa3a' => $arr_post['air_pendingin_silinder_a_5'],
            'lneapksa4a' => $arr_post['air_pendingin_silinder_a_6'],
            'lneapksa5a' => $arr_post['air_pendingin_silinder_b_1'],
            'lneapksa6a' => $arr_post['air_pendingin_silinder_b_2'],
            'lneapksb1b' => $arr_post['air_pendingin_silinder_b_3'],
            'lneapksb2b' => $arr_post['air_pendingin_silinder_b_4'],
            'lneapksb3b' => $arr_post['air_pendingin_silinder_b_5'],
            'lneapksb4b' => $arr_post['air_pendingin_silinder_b_6'],
            'lneapksb5b' => $arr_post['udara_masuk_intercooler_a'],
            'lneapksb6b' => $arr_post['udara_masuk_intercooler_b'],
            'lneumia' => $arr_post['udara_keluar_intercooler_a'],
            'lneumib' => $arr_post['udara_keluar_intercooler_b'],
            'lneukia' => $arr_post['masuk_filter'],
            'lneukib' => $arr_post['radiator_minyak_pelumas_masuk'],
            'lneumf' => $arr_post['radiator_minyak_pelumas_keluar'],
            'lnermpm' => $arr_post['radiator_air_pendingin_mesin_masuk'],
            'lnermpk' => $arr_post['radiator_air_pendingin_mesin_keluar'],
            'lnerapmm' => $arr_post['radiator_air_pendingin_intercooler_masuk'],
            'lnerapmk' => $arr_post['radiator_air_pendingin_intercooler_keluar'],
            'lnerapim' => $arr_post['kwh_ps'],
            'lnerapik' => $arr_post['hsd'],

        ];
        $this->db->where('group', 'Log NIIGATA ENGINE');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                $pesan = "Input Niigata Engine:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['jam'];
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

        $this->db->where_in('role_id', [5, 6, 17]); //Setting role yg akan dikirimi notif
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

    public function notif_ng($arr_post, $user)
    {
        $arr_notif = [
            'lngsw1' => $arr_post['suhu_1'],
            'lngsw2' => $arr_post['suhu_2'],
            'lngsw3' => $arr_post['suhu_3'],
            'lngapm' => $arr_post['air_pendingin_mesin_masuk'],
            'lngapk' => $arr_post['air_pendingin_Mesin_keluar'],
            'lngmpm' => $arr_post['minyak_pelumas_masuk'],
            'lngmpk' => $arr_post['minyak_pelumas_keluar'],
            'lnguba' => $arr_post['udara_bilas_A'],
            'lngubb' => $arr_post['udara_bilas_B'],
            'lngapum' => $arr_post['air_pendingin_udara_masuk'],
            'lnggssa1' => $arr_post['silinder_sisi_A_1'],
            'lnggssa2' => $arr_post['silinder_sisi_A_2'],
            'lnggssa3' => $arr_post['silinder_sisi_A_3'],
            'lnggssa4' => $arr_post['silinder_sisi_A_4'],
            'lnggssa5' => $arr_post['silinder_sisi_A_5'],
            'lnggssa6' => $arr_post['silinder_sisi_A_6'],
            'lnggssb1' => $arr_post['silinder_sisi_B_1'],
            'lnggssb2' => $arr_post['silinder_sisi_B_2'],
            'lnggssb3' => $arr_post['silinder_sisi_B_3'],
            'lnggssb4' => $arr_post['silinder_sisi_B_4'],
            'lnggssb5' => $arr_post['silinder_sisi_B_5'],
            'lnggssb6' => $arr_post['silinder_sisi_B_6'],
            'lngta1' => $arr_post['turbo_a_1_a'],
            'lngta2' => $arr_post['turbo_a_2_a'],
            'lngtb1' => $arr_post['turbo_b_1_a'],
            'lngtb2' => $arr_post['turbo_b_2_a'],


        ];
        $this->db->where('group', 'Log NIIGATA GENERATOR');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                $pesan = "Input Niigata Generator:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
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

        $this->db->where_in('role_id', [5, 6, 17]); //Setting role yg akan dikirimi notif
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

    public function notif_zve($arr_post, $user)
    {
        $arr_notif = [
            'lzveumsa' => $arr_post['udara_masuk_sisi_a'],
            'lzveumsb' => $arr_post['udara_masuk_sisi_b'],
            'lzveomma' => $arr_post['oli_masuk_mesin_a'],
            'lzveommb' => $arr_post['oli_masuk_mesin_b'],
            'lzveorm' => $arr_post['oli_radiator_masuk'],
            'lzveork' => $arr_post['oli_radiator_keluar'],
            'lzveapmma' => $arr_post['air_pendingin_masuk_mesin_a'],
            'lzveapmmb' => $arr_post['air_pendingin_masuk_mesin_b'],
            'lzveaprm' => $arr_post['air_pendingin_radiator_masuk'],
            'lzveaprk' => $arr_post['air_pendingin_radiator_keluar'],
            'lzveapim' => $arr_post['air_pendingin_injektor_masuk'],
            'lzveapik' => $arr_post['air_pendingin_injektor_keluar'],
            'lzveapkssa1a' => $arr_post['air_pendingin_keluar_silinder_sisi_a_1'],
            'lzveapkssa2a' => $arr_post['air_pendingin_keluar_silinder_sisi_a_2'],
            'lzveapkssa3a' => $arr_post['air_pendingin_keluar_silinder_sisi_a_3'],
            'lzveapkssa4a' => $arr_post['air_pendingin_keluar_silinder_sisi_a_4'],
            'lzveapkssa5a' => $arr_post['air_pendingin_keluar_silinder_sisi_a_5'],
            'lzveapkssa6a' => $arr_post['air_pendingin_keluar_silinder_sisi_a_6'],
            'lzveapkssa1b' => $arr_post['air_pendingin_keluar_silinder_sisi_b_1'],
            'lzveapkssa2b' => $arr_post['air_pendingin_keluar_silinder_sisi_b_2'],
            'lzveapkssa3b' => $arr_post['air_pendingin_keluar_silinder_sisi_b_3'],
            'lzveapkssa4b' => $arr_post['air_pendingin_keluar_silinder_sisi_b_4'],
            'lzveapkssa5b' => $arr_post['air_pendingin_keluar_silinder_sisi_b_5'],
            'lzveapkssa6b' => $arr_post['air_pendingin_keluar_silinder_sisi_b_6'],
            'lzvegbkssa1a' => $arr_post['gas_buang_keluar_silinder_sisi_a_1'],
            'lzvegbkssa2a' => $arr_post['gas_buang_keluar_silinder_sisi_a_2'],
            'lzvegbkssa3a' => $arr_post['gas_buang_keluar_silinder_sisi_a_3'],
            'lzvegbkssa4a' => $arr_post['gas_buang_keluar_silinder_sisi_a_4'],
            'lzvegbkssa5a' => $arr_post['gas_buang_keluar_silinder_sisi_a_5'],
            'lzvegbkssa6a' => $arr_post['gas_buang_keluar_silinder_sisi_a_6'],
            'lzvegbkssa1b' => $arr_post['gas_buang_keluar_silinder_sisi_b_1'],
            'lzvegbkssa2b' => $arr_post['gas_buang_keluar_silinder_sisi_b_2'],
            'lzvegbkssa3b' => $arr_post['gas_buang_keluar_silinder_sisi_b_3'],
            'lzvegbkssa4b' => $arr_post['gas_buang_keluar_silinder_sisi_b_4'],
            'lzvegbkssa5b' => $arr_post['gas_buang_keluar_silinder_sisi_b_5'],
            'lzvegbkssa6b' => $arr_post['gas_buang_keluar_silinder_sisi_b_6'],
            'lzvemb1' => $arr_post['main_bearing_1'],
            'lzvemb2' => $arr_post['main_bearing_2'],
            'lzvemb3' => $arr_post['main_bearing_3'],
            'lzvemb4' => $arr_post['main_bearing_4'],
            'lzvemb5' => $arr_post['main_bearing_5'],
            'lzvemb6' => $arr_post['main_bearing_6'],
            'lzvemb7' => $arr_post['main_bearing_7'],
            'lzvemb8' => $arr_post['main_bearing_8'],
            'lzvemb9' => $arr_post['main_bearing_9'],
            'lzvetmam' => $arr_post['turbo_a_masuk'],
            'lzvetmak' => $arr_post['turbo_a_keluar'],
            'lzvetmbm' => $arr_post['turbo_b_masuk'],
            'lzvetmbk' => $arr_post['turbo_b_keluar'],
            'lzvetka' => $arr_post['turbo_keluar_a'],
            'lzvetkb' => $arr_post['turbo_keluar_b'],
            'lzveapkm' => $arr_post['air_pendingin_keluar_mesin'],
            'lzvebbmm' => $arr_post['bahan_bakar_masuk_mesin'],
        ];
        $this->db->where('group', 'Log Zv ENGINE');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                $pesan = "Input Zv Engine:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
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

        $this->db->where_in('role_id', [5, 6, 17]); //Setting role yg akan dikirimi notif
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
    public function notif_zvg($arr_post, $user)
    {
        $arr_notif = [
            'lzgsw1' => $arr_post['suhu_winding_1'],
            'lzgsw2' => $arr_post['suhu_winding_2'],
            'lzgsw3' => $arr_post['suhu_winding_3'],
        ];
        $this->db->where('group', 'Log ZV GENERATOR');
        $compare = $this->db->get('suhu')->result_array();
        $fk_notif = array();
        $i = 0;
        $y = 0;
        foreach ($arr_notif as $key => $value) {
            if ($value >= $compare[$i]['kuning1']) {
                $pk = $user['id'] . date('dys') . $i;
                $pesan = "Input Zv Generator:" . $compare[$i]['suhu'] . '(' . $value . '&#8451)' . ' ' . $arr_post['waktu'];
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

        $this->db->where_in('role_id', [5, 6, 17]); //Setting role yg akan dikirimi notif
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
