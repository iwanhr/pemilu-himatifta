<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('app_helper');
        $this->load->model('Auth_Model');
    }

    public function index()
    {
        redirect(base_url('auth/login'));
        // if (!isset($_SESSION['pemilih']))
        // {
            // $data['key'] = random_password();
            // $data['page'] = "Login";
            // $this->load->view("login_v", $data);
        // }
    }

    public function login(){
        $data['key'] = random_password();
        $data['page'] = "Login";
        $this->load->view("login_v", $data);
    }

    public function login_pemilih()
    {
        $nbi = $this->input->post("email");
        $nama = $this->input->post("password");
        $key = $this->input->post("key");
        if (empty($nbi) || empty($nama) || empty($key))
        {
            redirect(base_url());
        }
        else
        {
            $cek_pemilih = $this->Auth_Model->pemilih_exists($nbi);
            if ($cek_pemilih == 1)
            {
                $cek_pemilih_data = $this->Auth_Model->check_pemilih_exists($nbi, $nama);
                if ($cek_pemilih_data == 1)
                {
                    $data_pemilih = $this->Auth_Model->get_data_pemilih($nbi);
                    $_SESSION['pemilih'] = $data_pemilih;
                    $log_login = $this->Auth_Model->set_last_login($nbi, $key);
                    redirect(base_url('pilih'));
                }
                else
                {
                    redirect(base_url(''));
                }
            }
            else
            {
                redirect(base_url());
            }
        }
    }
    
    public function logout_pemilih()
    {
        unset($_SESSION['pemilih']);
        redirect(base_url());
    }
    
    public function login_admin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $password1=md5(md5($password));
        
        if (empty($username) || empty($password))
        {
            redirect(base_url('admin'));
        }
        else
        {
            $cek_admin = $this->Auth_Model->admin_exists($username);
            if ($cek_admin == 1)
            {
                $cek_admin_data = $this->Auth_Model->check_admin_exists($username, $password1);
                if ($cek_admin_data==1)
                {
                    $data_admin = $this->Auth_Model->get_data_admin($username);
                    $_SESSION['admin'] = $data_admin;
                    $log_login = $this->Auth_Model->set_last_login_admin($username);
                    redirect(base_url('admin/register'));
                }
                else
                {
                    redirect(base_url('admin'));
                }
            }
            else
            {
               redirect(base_url('admin'));
            }
        }
    }
    

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */