<?php
include_once APPPATH . "/controllers/Guide.php";

class Auth extends Guide
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        // $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = get_title($this->uri->segment(1));
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = get_title($this->uri->segment(1));
            $data['unit1'] = $this->db->get('unit1')->result_array();
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 0,
                'date_created' => time(),
                'menu_style' => $this->input->post('menu_style'),
                'unit1' => $this->input->post('unit1'),
                'unit2' => $this->input->post('unit2'),
                'unit3' => $this->input->post('unit3'),
                'wa' => $this->input->post('wa'),
            ];

            // print_r($data);
            // exit;

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Daftar, Tunggu akun diverifikasi
          </div>');
            redirect('auth');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id' => $user['id'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1 || $user['role_id'] == 5) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Failed!</strong> Password salah 
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Failed!</strong> User belum teraktivasi 
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Failed!</strong> User tidak terdaftar
            </div>');
            redirect('auth');
        }
    }

    private function _login_gmail($param_email, $param_password)
    {
        $email = $param_email;
        $password = $param_password;

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata($data);

                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Failed!</strong> User belum teraktivasi 
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Failed!</strong> User tidak terdaftar
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Anda Berhasil Logout
        </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

    public function google()
    {
        // Google API Access
        require_once 'vendor/autoload.php';
        // init configuration
        $clientID = '593090912196-in77ml0e1mu060nv2dq6bkf5avqiem8c.apps.googleusercontent.com';
        $clientSecret = 'Ig0rGReoM9ba9etInwHcF7Y_';
        // $redirectUri = 'https://a3c61d9a6686.ngrok.io/pln_lombok/auth/google';
        $redirectUri = 'http://localhost/pln_lombok/auth/google';

        // create Client Request to access Google API
        $client = new Google_Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        //  Set the scopes required for the API you are going to call
        $client->addScope("email");
        $client->addScope("profile");

        // authenticate code from Google OAuth Flow
        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token['access_token']);

            // get profile info
            $google_oauth = new Google_Service_Oauth2($client);
            $google_account_info = $google_oauth->userinfo->get();


            $data['email'] = $google_account_info->email;
            $data['name'] = $google_account_info->name;
            $data['password'] = substr(md5($google_account_info->email), 2, 10);
            $data['role_id'] = 2;
            $data['menu_style'] = 1;
            $data['is_active'] = 1;
            $data['date_created'] = time();

            $this->db->where('email', $data['email']);
            $check_old_data = $this->db->get('user')->row_array();

            if (empty($check_old_data)) {
                $data['title'] = "Form Kelengkapan User";
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['unit1'] = $this->db->get('unit1')->result_array();

                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/form_kelengkapan', $data);
                $this->load->view('templates/auth_footer');

                // if ($this->db->insert('user', $data)) {
                //     echo "Berhasil Menambah user dari gmail";
                //     exit;
                // }
            } else {
                $this->_login_gmail($data['email'], $data['password']);
            }
        } else {
            redirect($client->createAuthUrl());
        }
    }

    public function google_register()
    {
        $arr_input = $this->input->post('input');

        if ($this->db->insert('user', $arr_input)) {
            // $this->_login_gmail($arr_input['email'], $arr_input['password']);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Tunggu Akun di Verifikasi
        </div>');
            redirect('auth');
        } else {
            die('error');
        }
    }

    public function unit2()
    {
        $id = $_GET['id'];

        $this->db->where('fk_unit1', $id);
        $data = $this->db->get('unit2')->result_array();

        echo json_encode($data);
    }

    public function unit3()
    {
        $id = $_GET['id'];

        $this->db->where('fk_unit2', $id);
        $data = $this->db->get('unit3')->result_array();

        echo json_encode($data);
    }
}
