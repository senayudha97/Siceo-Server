<?php
include_once APPPATH . "/controllers/Guide.php";

class Menu extends Guide
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = get_title($this->uri->segment(1));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Menu Added
            </div>');
            redirect('menu');
        }
    }

    public function subMenu()
    {
        $data['title'] = "Submenu Management";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->model('Menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            );

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Submenu Added
            </div>');
            redirect('menu/submenu');
        }
    }

    public function editMenu($status = NULL)
    {
        if ($status == 1) {
            $id = $_GET['id'];

            $this->db->where('id', $id);
            $result = $this->db->get('user_menu')->row_array();

            echo json_encode($result);
        } else {
            $this->db->set('menu', $this->input->post('menu'));
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_menu');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Merubah Menu</div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Menghapus Menu
            </div>');
        redirect('menu');
    }

    public function editSubmenu($id = NULL)
    {
        $data['title'] = 'Submenu Edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->model('Menu_model', 'menu');


        if ($this->form_validation->run() == false && $id != NULL) {
            $data['id'] = $id;
            $data['submenu'] = $this->menu->getSubMenuedit($id);
            $data['menu'] = $this->db->get('user_menu')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu_edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            );
            $this->db->set($data);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Merubah Sub Menu
            </div>');
            redirect('menu/submenu');
        }
    }

    public function deleteSubmenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Menghapus Sub Menu
            </div>');
        redirect('menu/submenu');
    }

    public function changeMenu()
    {
        $data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($data['menu_style'] == 0) {
            $this->db->set('menu_style', 1);
        } else if ($data['menu_style'] == 1) {
            $this->db->set('menu_style', 0);
        }
        $this->db->where('id', $data['id']);
        $this->db->update('user');

        redirect('user');
    }
}
