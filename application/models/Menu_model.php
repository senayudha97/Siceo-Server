<?php
include_once "Gg_model.php";


class Menu_model extends Gg_model
{
    public function getSubMenu()
    {
        return  $this->db->query("SELECT user_sub_menu.*, user_menu.menu FROM user_sub_menu JOIN user_menu
        ON user_sub_menu.menu_id = user_menu.id")->result_array();
    }

    public function getSubMenuedit($id)
    {
        return  $this->db->query("SELECT user_sub_menu.*, user_menu.menu FROM user_sub_menu JOIN user_menu
        ON user_sub_menu.menu_id = user_menu.id WHERE user_sub_menu.id = '$id'")->row_array();
    }
}
