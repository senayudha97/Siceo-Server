<?php
include_once "Gg_model.php";


class Tbl_admin extends Gg_model
{
    public function count($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_niigata_generator WHERE tanggal_input = '$awal'")->row_array();
    }

    // Chart Paok Motong

    public function countbp($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_beban_penyulang WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartbp($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_beban_penyulang WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartbp()
    {
        return $this->db->query("SELECT waktu, sikur as 'value' FROM log_beban_penyulang ORDER BY waktu ASC")->result_array();
    }

    public function countpm($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_perjaman_mesin WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartpm($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_perjaman_mesin WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartpm()
    {
        return $this->db->query("SELECT waktu, gas1 as 'value' FROM log_perjaman_mesin ORDER BY waktu ASC")->result_array();
    }

    public function countpmg($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_perjaman_mesin_generator WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartpmg($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_perjaman_mesin_generator WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartpmg()
    {
        return $this->db->query("SELECT waktu, input_volt as 'value' FROM log_perjaman_mesin_generator ORDER BY waktu ASC")->result_array();
    }

    public function countbm($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_booster_module WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartbm($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_booster_module WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartbm()
    {
        return $this->db->query("SELECT waktu, beban as 'value' FROM log_booster_module ORDER BY waktu ASC")->result_array();
    }

    public function counthrto($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_hrto WHERE tanggal_input = '$awal'")->row_array();
    }

    public function charthrto($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_hrto WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function scharthrto()
    {
        return $this->db->query("SELECT waktu, thermal_hrto1_in as 'value' FROM log_hrto ORDER BY waktu ASC")->result_array();
    }

    public function countpab($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_penyulang_analog_bateray WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartpab($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_penyulang_analog_bateray WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartpab()
    {
        return $this->db->query("SELECT waktu, rempung as 'value' FROM log_penyulang_analog_bateray ORDER BY waktu ASC")->result_array();
    }

    public function countmfo($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_separator_mfo WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartmfo($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_separator_mfo WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartmfo()
    {
        return $this->db->query("SELECT waktu, separator1_pressure_produksi_mfo as 'value' FROM log_separator_mfo ORDER BY waktu ASC")->result_array();
    }

    // Chart Ampenan

    public function chartng($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_niigata_generator WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartng()
    {
        return $this->db->query("SELECT waktu, suhu_1 as 'value' FROM log_niigata_generator ORDER BY waktu ASC")->result_array();
    }

    public function countne($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_niigata_engine WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartne($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT jam, $kolom as 'value' FROM log_niigata_engine WHERE tanggal_input = '$awal' GROUP BY jam  ORDER BY jam ASC")->result_array();
    }

    public function schartne()
    {
        return $this->db->query("SELECT jam, air_pendingin_mesin as 'value' FROM log_niigata_engine ORDER BY jam ASC")->result_array();
    }

    public function countcmr($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_za_cmr WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartcmr($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_za_cmr WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartcmr()
    {
        return $this->db->query("SELECT waktu, udara_start as 'value' FROM log_za_cmr ORDER BY waktu ASC")->result_array();
    }

    public function countpa($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_penyulang_ampenan WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartpa($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_penyulang_ampenan WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartpa()
    {
        return $this->db->query("SELECT waktu, lcc_analog as 'value' FROM log_penyulang_ampenan ORDER BY waktu ASC")->result_array();
    }

    public function countpe($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_pielstick_engine WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartpe($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_pielstick_engine WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartpe()
    {
        return $this->db->query("SELECT waktu, udara_masuk_sisi_a as 'value' FROM log_pielstick_engine ORDER BY waktu ASC")->result_array();
    }

    public function countpg($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_pielstick_generator WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartpg($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_pielstick_generator WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartpg()
    {
        return $this->db->query("SELECT waktu, tegangan as 'value' FROM log_pielstick_generator ORDER BY waktu ASC")->result_array();
    }

    public function countrs($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_ruston WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartrs($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_ruston WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartrs()
    {
        return $this->db->query("SELECT waktu, air_pendingin_jacket_water_masuk as 'value' FROM log_ruston ORDER BY waktu ASC")->result_array();
    }

    public function countze($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_zav_engine WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartze($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_zav_engine WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartze()
    {
        return $this->db->query("SELECT waktu, tegangan as 'value' FROM log_zav_engine ORDER BY waktu ASC")->result_array();
    }

    public function countzg($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_zav_generator WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartzg($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_zav_generator WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartzg()
    {
        return $this->db->query("SELECT waktu, tegangan as 'value' FROM log_zav_generator ORDER BY waktu ASC")->result_array();
    }

    public function countzve($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_zv_pltd WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartzve($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_zv_pltd WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartzve()
    {
        return $this->db->query("SELECT waktu, udara_masuk_sisi_a as 'value' FROM log_zv_pltd ORDER BY waktu ASC")->result_array();
    }

    public function countzvg($kolom, $awal)
    {
        return $this->db->query("SELECT COUNT($kolom) as total FROM log_zv_generator WHERE tanggal_input = '$awal'")->row_array();
    }

    public function chartzvg($kolom, $awal)
    {
        return $this->db->query("SELECT DISTINCT waktu, $kolom as 'value' FROM log_zv_generator WHERE tanggal_input = '$awal' GROUP BY waktu  ORDER BY waktu ASC")->result_array();
    }

    public function schartzvg()
    {
        return $this->db->query("SELECT waktu, tegangan as 'value' FROM log_zv_generator ORDER BY waktu ASC")->result_array();
    }
}
