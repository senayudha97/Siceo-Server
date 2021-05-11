<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) { // CHECK WHILE EMAIL WAS EMPTY
        redirect('auth');
    } else { // CHECK IF THIS USER ABLE TO ACCESS
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        // $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $queryMenu = $ci->db->query("SELECT * FROM user_menu  RIGHT JOIN user_sub_menu ON user_sub_menu.id = user_menu.id 
        WHERE url LIKE '%$menu%'")->row_array();

        $menu_id = $queryMenu['menu_id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function get_title($url)
{
    $ci = get_instance();
    $result = $ci->db->query("SELECT title FROM user_sub_menu WHERE url LIKE '%$url%'")->row_array();

    return $result['title'];
}

function is_login_core()
{
    $ci = get_instance();
    print($ci->uri->segment(1));
}

function check_access($role_id, $menu_id) // untuk merubah status access pada menu role access(tidak berhubungan dengan status pengecekan saat login)
{
    $ci = get_instance();

    $result = $ci->db->get_where('user_access_menu', [
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);

    if ($result->num_rows() > 0) {
        echo "checked='checked'";
    }
}


// Date Converter
function date_to_db($tanggal)
{
    if ($tanggal != '') {
        $x_tanggal = explode("-", $tanggal);
        $d = $x_tanggal[0];
        $m = $x_tanggal[1];
        $y = $x_tanggal[2];
        $date = $y . "-" . $m . "-" . $d;
        return $date;
    } else return $tanggal;
}

function content_date($tanggal)
{
    if ($tanggal != '') {
        $x_tanggal = explode("-", $tanggal);
        $y = $x_tanggal[0];
        $m = $x_tanggal[1];
        $d = $x_tanggal[2];
        $date = $d . "-" . $m . "-" . $y;
        return $date;
    } else return $tanggal;
}

function form_waktu($name = "input[waktu]")
{
    $arr_waktu = [
        "0:00:00", "1:00:00", "2:00:00", "3:00:00", "4:00:00", "5:00:00", "6:00:00", "7:00:00", "8:00:00", "9:00:00", "10:00:00", "11:00:00", "12:00:00", "13:00:00", "14:00:00", "15:00:00", "16:00:00", "17:00:00", "18:00:00", "19:00:00", "20:00:00", "21:00:00", "22:00:00", "23:00:00"
    ];

    echo "<select class='form-control' name='$name'>";
    foreach ($arr_waktu as $row) {
        echo "<option value='$row'>" . $row . "</option>";
    }
    echo "</select>";
}

function form_shiftmeeting_waktu($name = "input[waktu]")
{
    $arr_waktu = [
        "0:00:00 - 8:00:00", "8:00:00 - 16:00:00", "16:00:00 - 24:00:00"
    ];

    echo "<select class='form-control' name='$name'>";
    foreach ($arr_waktu as $row) {
        echo "<option value='$row'>" . $row . "</option>";
    }
    echo "</select>";
}
