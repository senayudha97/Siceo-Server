<?php
include_once "Gg_model.php";


class Tbl_plts extends Gg_model
{
    // Insert
    public function insert_plts($arr_data = NULL, $table = "checklist_pengga")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_narmada($arr_data = NULL, $table = "checklist_pengga")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_santong($arr_data = NULL, $table = "checklist_santong")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_trawangan($arr_data = NULL, $table = "checklist_trawangan")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_meno($arr_data = NULL, $table = "checklist_meno")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_air($arr_data = NULL, $table = "checklist_air")
    {
        $this->auto_insert($arr_data, $table);
    }

    public function insert_setup_plts($arr_data = NULL, $table = "setup_plts")
    {
        $this->auto_insert($arr_data, $table);
    }

    // Delete
    public function delete_plts($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_pengga";
        $sql['pk'] = "pk_plts";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_narmada($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_narmada";
        $sql['pk'] = "pk_plts";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_santong($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_santong";
        $sql['pk'] = "pk_plts";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_trawangan($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_trawangan";
        $sql['pk'] = "pk_plts";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_meno($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_meno";
        $sql['pk'] = "pk_plts";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_air($param = NULL, $user = NULL)
    {
        $sql['table'] = "checklist_air";
        $sql['pk'] = "pk_plts";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function delete_setup_plts($param = NULL, $user = NULL)
    {
        $sql['table'] = "setup_plts";
        $sql['pk'] = "pk_setup_plts";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    // Update
    public function update_plts($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_pengga');
    }

    public function update_narmada($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_narmada');
    }

    public function update_santong($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_santong');
    }

    public function update_trawangan($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_trawangan');
    }

    public function update_meno($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_meno');
    }

    public function update_air($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'checklist_air');
    }

    public function update_setup_plts($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'setup_plts');
    }
}
