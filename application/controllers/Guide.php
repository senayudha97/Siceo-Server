<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Guide extends CI_Controller
{
    var    $is_delete = 0;
    public function __constructor()
    {
        parent::__construct();
        $data_post  = $this->input->post();
    }

    public function flash_success($message)
    {
        $this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Success!</strong> $message
            </div>");
    }

    public function flash_fail($message)
    {
        $this->session->set_flashdata('message', "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Gagal!</strong> $message
            </div>");
    }

    public function PHPExcelinit()
    {
        require(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php');
        require(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

        // Instansiasi and config
        $xl = new PHPExcel();
        return $xl;
    }

    public function runExcel()
    {
        require(APPPATH . 'excel/niigata_engine_excel.php');
    }

    public function cellRange($end_column = '', $first_letters = '')
    {
        $columns = array();
        $length = strlen($end_column);
        $letters = range('A', 'Z');

        // Iterate over 26 letters.
        foreach ($letters as $letter) {
            // Paste the $first_letters before the next.
            $column = $first_letters . $letter;
            // Add the column to the final array.
            $columns[] = $column;
            // If it was the end column that was added, return the columns.
            if ($column == $end_column)
                return $columns;
        }

        // Add the column children.
        foreach ($columns as $column) {
            // Don't itterate if the $end_column was already set in a previous itteration.
            // Stop iterating if you've reached the maximum character length.
            if (!in_array($end_column, $columns) && strlen($column) < $length) {
                $new_columns = myRange($end_column, $column);
                // Merge the new columns which were created with the final columns array.
                $columns = array_merge($columns, $new_columns);
            }
        }

        return $columns;
    }

    public function dayRange($early, $later)
    {
        $first_date = strtotime($early);
        $second_date = strtotime($later);
        $offset = $second_date - $first_date;
        return floor($offset / 60 / 60 / 24);
    }
    public function beban_penyulang_kolom()
    {
        return [
            "sikur", "masbagik", "sakra", "keruak", "pancor", "rempung", "kopel_pmt_ekspor", "kopel_pmt_impor", "kopel_pry_ekspor", "kopel_pry_impor", "keterangan", "generator", "mesin",
        ];
    }

    public function perjaman_mesin_kolom()
    {
        return [
            "gas1", "gas2", "gas3", "gas4", "gas5", "gas6", "turbo_masuk_kiri_atas", "turbo_masuk_kiri_bawah", "turbo_masuk_kanan_atas", "turbo_masuk_kanan_bawah", "turbo_keluar_kiri", "turbo_keluar_kanan", "rak_bbm", "governor_load_limit", "air_ped_injektor", "pelumasan_mesin", "udara_masuk_kiri", "udara_masuk_kanan", "bahan_bakar_mesin", "udara_masuk", "udara_start", "air_pend_masuk_mesin", "putaran_turbo_kiri", "putaran_turbo_kanan", "bearing1", "bearing2", "bearing3", "bearing4", "bearing5", "bearing6", "bearing7", "bearing8", "fk_mesin", "generator", "mesin", "created_date", "udara_masuk_l", "udara_masuk_r", "minyak_pelumas_masuk_mesin_l", "minyak_pelumas_radiator_masuk", "air_pendingin_mesin_masuk_l", "air_pendingin_radiator_masuk", "air_pendingin_injektor_masuk", "keluar_cylinder_l_1", "keluar_cylinder_l_2", "keluar_cylinder_l_3", "keluar_cylinder_l_4", "keluar_cylinder_l_5", "keluar_cylinder_l_6", "keluar_cylinder_r_1", "keluar_cylinder_r_2", "keluar_cylinder_r_3", "keluar_cylinder_r_4", "keluar_cylinder_r_5", "keluar_cylinder_r_6", "gas_buang_cylinder_l_1", "gas_buang_cylinder_l_2", "gas_buang_cylinder_l_3", "gas_buang_cylinder_l_4", "gas_buang_cylinder_l_5", "gas_buang_cylinder_l_6", "flow_meter_bahan_bakar", "minyak_pelumas_masuk_mesin_r", "minyak_pelumas_radiator_keluar", "air_pendingin_mesin_masuk_r", "air_pendingin_radiator_keluar", "air_pendingin_injektor_keluar",

        ];
    }

    public function perjaman_mesin_generator_kolom()
    {
        return [
            "input_volt", "input_hz", "input_cos", "input_mvar", "input_bebanmw", "input_arus_r", "input_arus_s", "input_arus_t", "input_exiter_a", "input_exiter_v", "input_winding1", "input_winding2", "input_winding3", "input_winding4", "input_winding5", "input_winding6", "input_bearing", "input_kwh_produksi", "input_kwh_alat_bantu",
        ];
    }

    public function perjaman_booster_module_kolom()
    {
        return [
            "beban", "flow_meter_hsd", "flow_meter_mfo", "kwh_produksi_hsd", "kwh_produksi_mfo", "inlet_module", "discharge_bp", "suction_bp", "mixing_tank12", "fo_outlet", "in_to_engine", "air_control", "inlet_flow1", "inlet_flow2", "mixing_tank9", "inlet_heater", "outlet_heater", "viscosensor", "return_line", "fuel_oil", "viscositas",
        ];
    }

    public function perjaman_hrto_kolom()
    {
        return [
            "thermal_hrto1_in", "thermal_hrto1_out", "thermal_hrto2_in", "thermal_hrto2_out", "gas_inlet_hrto2", "gas_inlet_hrto3", "gas_inlet_hrto4", "gas_inlet_hrto5", "circulation_thermal_hrto1", "circulation_thermal_hrto2", "temperature_outlet_he", "pressure_outlet_he", "outlet_circulation_hrto1", "outlet_circulation_hrto2",

        ];
    }

    public function perjaman_pab_kolom()
    {
        return [
            "rempung", "pancor", "keruak", "sakra", "masbagik", "sikur", "unit23_110vdc_v", "unit23_110vdc_i", "unit23_24vdc_v", "unit23_24vdc_i", "unit45_110vdc_v", "unit45_110vdc_i", "unit45_24vdc_v", "unit45_24vdc_i", "penyulang_110vdc_v", "penyulang_110vdc_i", "penyulang_24vdc_v", "penyulang_24vdc_i",
        ];
    }

    public function perjaman_mfo_kolom()
    {
        return [
            "separator1_pressure_produksi_mfo", "separator1_flow_rate_produksi_mfo", "separator1_temperature_produksi_mfo", "separator1_temperature_inlet_thermal_oil", "separator2_pressure_produksi_mfo", "separator2_flow_rate_produksi_mfo", "separator2_temperature_produksi_mfo", "separator2_temperature_inlet_thermal_oil", "tangki250_level", "tangki250_temp", "tangki60_level", "tangki60_temp", "pressure_water_supply",

        ];
    }

    public function niigata_generator_kolom()
    {
        return  [
            'tegangan', 'frekuensi', 'faktor_daya', 'daya_semu', 'beban', 'arus_r', 'arus_s', 'arus_t', 'penguat_medan_arus', 'penguat_medan_tegangan', 'suhu_1', 'suhu_2', 'suhu_3', 'bearing', 'pendingin_udara_generator_masuk', 'pendingin_udara_generator_keluar', 'putaran_turbo_a', 'putaran_turbo_b', 'sikap_kwh_meter', 'level_become', 'daya_r', 'daya_s', 'daya_t', 'daya_mw', 'air_pendingin_mesin_masuk', 'air_pendingin_mesin_keluar', 'minyak_pelumas_masuk', 'minyak_pelumas_keluar', 'udara_bilas_A', 'udara_bilas_B', 'air_pendingin_udara_masuk', 'silinder_sisi_A_1', 'silinder_sisi_A_2', 'silinder_sisi_A_3', 'silinder_sisi_A_4', 'silinder_sisi_A_5', 'silinder_sisi_A_6', 'silinder_sisi_B_1', 'silinder_sisi_B_2', 'silinder_sisi_B_3', 'silinder_sisi_B_4', 'silinder_sisi_B_5', 'silinder_sisi_B_6', 'turbo_a_1_a', 'turbo_a_2_a', 'turbo_b_1_a', 'turbo_b_2_a', 'turbo_a_1_b', 'turbo_a_2_b', 'turbo_b_1_b',
            'turbo_b_2_b'
        ];
    }

    public function ne_kolom()
    {
        return  [
            "air_pendingin_mesin", "air_pendingin_intercooler", "minyak_pelumas_masuk_mesin", "udara_bilas_a", "udara_bilas_b", "bahan_bakar_masuk_mesin", "minyak_pelumas_tuas_katup", "minyak_pendingin_injektor", "gas_buang", "load_limit_governor", "silinder_sisi_a_1", "silinder_sisi_a_2", "silinder_sisi_a_3", "silinder_sisi_a_4", "silinder_sisi_a_5", "silinder_sisi_a_6", "silinder_sisi_b_1", "silinder_sisi_b_2", "silinder_sisi_b_3", "silinder_sisi_b_4", "silinder_sisi_b_5", "silinder_sisi_b_6", "bahan_bakar_mesin_masuk", "minyak_pendingin_injektor_masuk", "minyak_pendingin_injektor_keluar", "air_pendingin_silinder_a_1", "air_pendingin_silinder_a_2", "air_pendingin_silinder_a_3", "air_pendingin_silinder_a_4", "air_pendingin_silinder_a_5", "air_pendingin_silinder_a_6", "air_pendingin_silinder_b_1", "air_pendingin_silinder_b_2", "air_pendingin_silinder_b_3", "air_pendingin_silinder_b_4", "air_pendingin_silinder_b_5", "air_pendingin_silinder_b_6", "udara_masuk_intercooler_a", "udara_masuk_intercooler_b", "udara_keluar_intercooler_a", "udara_keluar_intercooler_b", "masuk_filter", "radiator_minyak_pelumas_masuk", "radiator_minyak_pelumas_keluar", "radiator_air_pendingin_mesin_masuk", "radiator_air_pendingin_mesin_keluar", "radiator_air_pendingin_intercooler_masuk", "radiator_air_pendingin_intercooler_keluar", "kwh_ps", "hsd", "mfo_in", "mfo_return",
        ];
    }

    public function cmr_kolom()
    {
        return  [
            "udara_start", "air_pendingin_mesin", "air_pendingin_injector", "raw_water", "minyak_pelumas", "bahan_bakar", "udara_masuk", "gas_buang_keluar_silinder_sisi_a_1", "gas_buang_keluar_silinder_sisi_a_2", "gas_buang_keluar_silinder_sisi_a_3", "gas_buang_keluar_silinder_sisi_a_4", "gas_buang_keluar_silinder_sisi_a_5", "gas_buang_keluar_silinder_sisi_a_6", "gas_buang_keluar_silinder_sisi_b_1", "gas_buang_keluar_silinder_sisi_b_2", "gas_buang_keluar_silinder_sisi_b_3", "gas_buang_keluar_silinder_sisi_b_4", "gas_buang_keluar_silinder_sisi_b_5", "gas_buang_keluar_silinder_sisi_b_6", "turbo_a_masuk", "turbo_a_keluar", "turbo_b_masuk", "turbo_b_keluar", "temperatur_air_pendingin_mesin", "temperatur_air_pendingin_injector", "temperatur_minyak_pelumas", "temperatur_bahan_bakar", "temperatur_raw_water", "temperatur_udara_masuk", "bearing_generator1", "bearing_generator2", "thrust_bearing", "main_bearing1", "main_bearing2", "main_bearing3", "main_bearing4", "main_bearing5", "main_bearing6", "main_bearing7", "stator1", "stator2", "stator3", "stator4", "stator5", "stator6", "putaran_turbo_a", "putaran_turbo_b",
        ];
    }

    public function pa_kolom()
    {
        return  [
            "lcc_analog", "lcc_digital", "ps9_analog", "ps9_digital", "praya_analog", "praya_digital", "senggigi_analog", "senggigi_digital", "kopang_analog", "kopang_digital", "gomong_analog", "gomong_digital", "kediri_analog", "kediri_digital", "kopel_taman_a_analog_import", "kopel_taman_a_analog_export", "kopel_taman_a_digital_import", "kopel_taman_a_digital_export", "kopel_ampenan_biau_analog_import", "kopel_ampenan_biau_analog_export", "kopel_ampenan_biau_digital_import", "kopel_ampenan_biau_digital_export", "sewatama1_import", "sewatama1_export", "sewatama2_import", "sewatama2_export", "kopel_gi1_import", "kopel_gi1_export", "kopel_gi2_import", "kopel_gi2_export",

        ];
    }

    public function pe_kolom()
    {
        return  [
            "udara_masuk_sisi_a", "udara_masuk_sisi_b", "minyak_pelumas_masuk", "minyak_pelumas_keluar", "air_pendingin_masuk_mesin", "air_pendingin_keluar_mesin", "masuk_cooler_sisi_a", "masuk_cooler_sisi_b", "keluar_cooler_sisi_a", "keluar_cooler_sisi_b", "injector_masuk", "injector_keluar", "air_pendingin_keluar_silinder_sisi_a1", "air_pendingin_keluar_silinder_sisi_a2", "air_pendingin_keluar_silinder_sisi_a3", "air_pendingin_keluar_silinder_sisi_a4", "air_pendingin_keluar_silinder_sisi_a5", "air_pendingin_keluar_silinder_sisi_a6", "air_pendingin_keluar_silinder_sisi_b1", "air_pendingin_keluar_silinder_sisi_b2", "air_pendingin_keluar_silinder_sisi_b3", "air_pendingin_keluar_silinder_sisi_b4", "air_pendingin_keluar_silinder_sisi_b5", "air_pendingin_keluar_silinder_sisi_b6", "gas_buang_keluar_silinder_sisi_a_1", "gas_buang_keluar_silinder_sisi_a_2", "gas_buang_keluar_silinder_sisi_a_3", "gas_buang_keluar_silinder_sisi_a_4", "gas_buang_keluar_silinder_sisi_a_5", "gas_buang_keluar_silinder_sisi_a_6", "gas_buang_keluar_silinder_sisi_b_1", "gas_buang_keluar_silinder_sisi_b_2", "gas_buang_keluar_silinder_sisi_b_3", "gas_buang_keluar_silinder_sisi_b_4", "gas_buang_keluar_silinder_sisi_b_5", "gas_buang_keluar_silinder_sisi_b_6", "main_bearing1", "main_bearing2", "main_bearing3", "main_bearing4", "main_bearing5", "main_bearing6", "main_bearing7", "suhu_ruangan", "rack_bahan_bakar", "governor_load_limit", "tekanan_minyak_pelumas_masuk", "tekanan_minyak_pelumas_keluar", "udara_masuk_disalurkan_sisi_a", "udara_masuk_disalurkan_sisi_b", "pelumas_rocker_arm", "bahan_bakar1", "bahan_bakar2", "air_pendingin_cw", "air_pendingin_jw", "air_pendingin_rw", "putaran_turbo_sisi_a", "putaran_turbo_sisi_b",
        ];
    }

    public function pg_kolom()
    {
        return  [
            "tegangan", "frekwensi", "faktor_daya", "daya_semu", "beban", "arus_r", "arus_s", "arus_t", "penguat_medan_teg", "penguat_medan_arus", "kumparan_generator1", "kumparan_generator2", "kumparan_generator3", "kumparan_generator4", "kumparan_generator5", "kumparan_generator6", "bantalan_generator", "udara_pendingin", "kwh_produksi", "flow_meter_bahan_bakar",
        ];
    }

    public function rs_kolom()
    {
        return  [
            "air_pendingin_jacket_water_masuk", "air_pendingin_jacket_water_keluar", "air_pendingin_raw_water_masuk", "air_pendingin_raw_water_keluar", "minyak_pelumas_masuk", "minyak_pelumas_keluar", "suhu_udara_masuk", "gas_buang_silinder_sisi_a_1", "gas_buang_silinder_sisi_a_2", "gas_buang_silinder_sisi_a_3", "gas_buang_silinder_sisi_a_4", "gas_buang_silinder_sisi_b_1", "gas_buang_silinder_sisi_b_2", "gas_buang_silinder_sisi_b_3", "gas_buang_silinder_sisi_b_4", "sebelum_turbo_a1", "sebelum_turbo_a2", "sebelum_turbo_a3", "sebelum_turbo_a4", "sebelum_turbo_b1", "sebelum_turbo_b2", "sebelum_turbo_b3", "sebelum_turbo_b4", "minyak_disaringan_masuk", "minyak_disaringan_keluar", "pelumas_dipanel", "pelumas_dimesin", "bahan_bakar_disaringan_masuk", "bahan_bakar_disaringan_keluar", "pendinginan_jacket_water_masuk", "pendinginan_raw_water_masuk", "tekanan_udara_masuk", "load_limit_governor", "frekwensi", "faktor_daya", "tegangan", "arus_r", "arus_s", "arus_t", "penguat_medan_tegangan", "penguat_medan_arus", "beban", "kwh_produksi", "flow_meter_bahan_bakar",
        ];
    }

    public function ze_kolom()
    {
        return  [
            "tegangan", "frekuensi", "faktor_daya", "daya_semu", "beban", "arus_a_r", "arus_a_s", "arus_a_t", "penguat_medan_arus", "penguat_medan_tegangan", "bearing", "kwh_produksi_hsd", "kwh_produksi_mfo", "kwh_alat_bantu", "arus_b_r", "arus_b_s", "arus_b_t", "level_becomes",
        ];
    }

    public function zg_kolom()
    {
        return  [
            "tegangan", "frekuensi", "faktor_daya", "daya_semu", "beban", "arus_a_r", "arus_a_s", "arus_a_t", "penguat_medan_arus", "penguat_medan_tegangan", "bearing", "kwh_produksi_hsd", "kwh_produksi_mfo", "kwh_alat_bantu", "arus_b_r", "arus_b_s", "arus_b_t", "level_becomes",
        ];
    }
    public function zve_kolom()
    {
        return  [
            "tegangan", "udara_masuk_sisi_a", "udara_masuk_sisi_b", "oli_masuk_mesin_a", "oli_masuk_mesin_b", "oli_radiator_masuk", "oli_radiator_keluar", "air_pendingin_masuk_mesin_a", "air_pendingin_masuk_mesin_b", "air_pendingin_radiator_masuk", "air_pendingin_radiator_keluar", "air_pendingin_injektor_masuk", "air_pendingin_injektor_keluar", "air_pendingin_keluar_silinder_sisi_a_1", "air_pendingin_keluar_silinder_sisi_a_2", "air_pendingin_keluar_silinder_sisi_a_3", "air_pendingin_keluar_silinder_sisi_a_4", "air_pendingin_keluar_silinder_sisi_a_5", "air_pendingin_keluar_silinder_sisi_a_6", "air_pendingin_keluar_silinder_sisi_b_1", "air_pendingin_keluar_silinder_sisi_b_2", "air_pendingin_keluar_silinder_sisi_b_3", "air_pendingin_keluar_silinder_sisi_b_4", "air_pendingin_keluar_silinder_sisi_b_5", "air_pendingin_keluar_silinder_sisi_b_6", "gas_buang_keluar_silinder_sisi_a_1", "gas_buang_keluar_silinder_sisi_a_2", "gas_buang_keluar_silinder_sisi_a_3", "gas_buang_keluar_silinder_sisi_a_4", "gas_buang_keluar_silinder_sisi_a_5", "gas_buang_keluar_silinder_sisi_a_6", "gas_buang_keluar_silinder_sisi_b_1", "gas_buang_keluar_silinder_sisi_b_2", "gas_buang_keluar_silinder_sisi_b_3", "gas_buang_keluar_silinder_sisi_b_4", "gas_buang_keluar_silinder_sisi_b_5", "gas_buang_keluar_silinder_sisi_b_6", "main_bearing_1", "main_bearing_2", "main_bearing_3", "main_bearing_4", "main_bearing_5", "main_bearing_6", "main_bearing_7", "main_bearing_8", "main_bearing_9", "turbo_a_masuk", "turbo_a_keluar", "turbo_b_masuk", "turbo_b_keluar", "turbo_keluar_a", "turbo_keluar_b", "air_pendingin_keluar_mesin", "bahan_bakar_masuk_mesin", "rack_bahan_bakar", "governor_load_limit", "udara_start", "presure_udara_masuk_sisi_a", "tanggal_input", "waktu", "waktu_input", "operator", "presure_udara_masuk_sisi_b", "udara_masuk_ab", "minyak_pelumas", "air_pendingin_mesin", "air_pendingin_injektor", "udara_masuk_disalurkan_sisi_a", "udara_masuk_disalurkan_sisi_b", "putaran_turbo_sisi_a", "putaran_turbo_sisi_b", "tekanan_oli_pada_separator", "ampere_pompa_ali", "ampere_pompa_jw", "mfo_in", "mfo_return", "hsd", "bahan_bakar_masuk_mesin1",
        ];
    }

    public function zvg_kolom()
    {
        return  [
            "tegangan", "frekuensi", "faktor_daya", "daya_semu", "beban", "arus_a_r", "arus_a_s", "arus_a_t", "penguat_medan_arus", "suhu_winding_1", "suhu_winding_2", "suhu_winding_3", "bearing", "kwh_produksi_hsd", "kwh_produksi_mfo", "kwh_alat_bantu", "level_becomes",
        ];
    }
}
