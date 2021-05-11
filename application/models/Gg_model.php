<?php
class Gg_model extends CI_Model
{

    public function __constructor()
    {
        parent::__construct();
    }
    function auto_insert($data = array(), $table)
    {
        $arr = $data;
        $val = "";
        $column = "";
        foreach ($arr as $key => $value) {
            $val .=  "'" . $value . "'" . ", ";
            $column .= $key   . ", ";
        }
        $sql = "INSERT INTO $table (" . rtrim($column, ", ") . ") VALUES (" . rtrim($val, ", ") . ")";
        $this->db->query($sql);
    }


    function auto_insert_multiple($data = array(), $table)
    {

        $size = sizeof($data);

        //get early key with 2 dimmension
        $keysearly = array();
        foreach ($data as $key => $value) {
            $keysearly[$key] =  array_keys($value);
        }
        $sizekeysearly = sizeof($keysearly);
        $keys = array();
        for ($i = 0; $i < ($sizekeysearly / 2); $i++) {
            array_push($keys, $keysearly[$i][0]);
        }
        $keys = array_unique($keys); // dapat colom dalam bentuk aray
        $column = "";
        foreach ($keys as $key => $value) { // merubah collumn array menjadi baris
            $column .= $value   . ", ";
        }
        //end of get key 

        //get value in every loops
        $valueearly = array();
        foreach ($data as $key => $value) {
            $valueearly[$key] =  array_values($value);
        }
        $sizevalueearly = sizeof($valueearly);
        $val = array();
        for ($i = 0; $i < ($sizevalueearly); $i++) {
            array_push($val, $valueearly[$i][0]);
        }
        $values = "";
        $i = 1;
        foreach ($val as $key => $value) {
            $size = sizeof($keys);
            $parser = ", ";
            $mod = $i % $size;
            if ($mod  == 0) {
                $parser =  ". ";
                $i = 1;
            } else {
                $i++;
            }
            $values .= "'" . $value . "'"   . $parser;
        }

        $valquery = explode('.', $values);

        for ($i = 0; $i < sizeof($valquery) - 1; $i++) {
            $sql = "INSERT INTO $table (" . rtrim($column, ", ") . ") VALUES(" . rtrim($valquery[$i], ", ") . ")";
            $this->db->query($sql);
        }

        return 1;
    }

    function deleteData($sql)
    {
        $this->db->set('is_delete', '1');
        $this->db->set('delete_by', $sql['user']);
        $this->db->where($sql['pk'], $sql['value']);
        $this->db->update($sql['table']);
    }

    function updateData($arr_data, $pk, $table)
    {
        $this->db->where($pk);
        $this->db->update($table, $arr_data);
    }
}
