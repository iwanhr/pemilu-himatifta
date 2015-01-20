<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pilih extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('app_helper');
        $this->load->model('Auth_Model');
        $this->load->model('Chooser_Model');
        $this->load->model('Candidate_Model');
        $this->load->helper('url');
    }

    public function index()
    {
        $session = $_SESSION['pemilih'];
        $data['login'] = $session[0]['key'];
        $data_pemilih = $_SESSION['pemilih'];
        $cek_pemilih = $this->Candidate_Model->cek_data_pemilih($data_pemilih[0]['id_chooser']);
        if ($cek_pemilih == 0)
        {
            $data['kandidat'] = $this->Candidate_Model->get_all_data("candidates");
        }
        else
        {
            $data['kandidat'] = array();
        }
        $this->load->view("pilih_v", $data);
    }

    public function coblos()
    {
        $id_product = $this->uri->segment(3, '');
        $data_pemilih = $_SESSION['pemilih'];

        $cek_pemilih = $this->Candidate_Model->cek_data_pemilih($data_pemilih[0]['id_chooser']);

        if ($cek_pemilih == 0)
        {
            $data = array(
                "id_chosser" => $data_pemilih[0]['id_chooser'],
                "choose" => $id_product,
                "ip" => get_ip(),
                "name_pc" => get_pc_name()
            );
            $record = $this->Candidate_Model->insert("chosseds", $data);
            if ($record)
            {
        //         $data['key'] = random_password();
        // $data['page'] = "Login";
        // $this->load->view("login_v", $data);
                // header("Location: http://pemilu-himatifta.hubmecon.com/");
                // redirect("http://pemilu-himatifta.hubmecon.com/");
                redirect(base_url());
            }
            else
            {
        //         $data['key'] = random_password();
        // $data['page'] = "Login";
        // $this->load->view("login_v", $data);
                redirect(base_url());
                // redirect("http://pemilu-himatifta.hubmecon.com/");
            }
        }
        else
        {
        //     $data['key'] = random_password();
        // $data['page'] = "Login";
        // $this->load->view("login_v", $data);
            // redirect("http://pemilu-himatifta.hubmecon.com/");
            redirect(base_url());
        }
        unset($_SESSION['pemilih']);
    }

}

/* End of file pilih.php */
/* Location: ./application/controllers/pilih.php */