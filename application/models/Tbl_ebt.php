<?php
include_once "Gg_model.php";


class Tbl_ebt extends Gg_model
{
    // Insert
    public function insert_ebt_pengga($arr_data = NULL, $table = "log_ebt_pengga")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_ebt_narmada($arr_data = NULL, $table = "log_ebt_narmada")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_ebt_santong($arr_data = NULL, $table = "log_ebt_santong")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_ebt_trawangan($arr_data = NULL, $table = "log_ebt_trawangan")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_ebt_meno($arr_data = NULL, $table = "log_ebt_meno")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_ebt_air($arr_data = NULL, $table = "log_ebt_air")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_ebt($arr_data = NULL, $table = "setup_ebt")
    {
        $this->auto_insert($arr_data, $table);
    }

    // Delete
    public function delete_ebt_pengga($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_ebt_pengga";
        $sql['pk'] = "pk_log_tengah_jaman";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_ebt_narmada($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_ebt_narmada";
        $sql['pk'] = "pk_log_tengah_jaman";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_ebt_santong($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_ebt_santong";
        $sql['pk'] = "pk_log_tengah_jaman";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_ebt_trawangan($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_ebt_trawangan";
        $sql['pk'] = "pk_log_tengah_jaman";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_ebt_meno($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_ebt_meno";
        $sql['pk'] = "pk_log_tengah_jaman";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_ebt_air($param = NULL, $user = NULL)
    {
        $sql['table'] = "log_ebt_air";
        $sql['pk'] = "pk_log_tengah_jaman";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_setup_ebt($param = NULL, $user = NULL)
    {
        $sql['table'] = "setup_ebt";
        $sql['pk'] = "pk_setup_ebt";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    // Update
    public function update_ebt_pengga($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_ebt_pengga');
    }

    public function update_ebt_narmada($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_ebt_narmada');
    }

    public function update_ebt_santong($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_ebt_santong');
    }

    public function update_ebt_trawangan($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_ebt_trawangan');
    }

    public function update_ebt_meno($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_ebt_meno');
    }

    public function update_ebt_air($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'log_ebt_air');
    }

    public function update_setup_ebt($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_ebt');
    }
}
