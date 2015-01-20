<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('app_helper');
        $this->load->model('Auth_Model');
        $this->load->model('Chooser_Model');
        $this->load->model('Candidate_Model');
    }

    public function index()
    {
        $this->load->view("admin/login");
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        redirect(base_url('admin'));
    }

    //Pemilih
    public function register()
    {
        $data['judul'] = "Register Pemilih";
        $data['deskripsi'] = "Pendaftaran Calon Pemilu";
        $data['content'] = "admin/pemilih/index";
        $data['reg_key'] = random_key();
        $this->load->view('admin/template', $data);
    }

    public function add_pemilih()
    {
        $nbi = $this->input->post("nbi");
        $nama = $this->input->post("nama");
        $phone = $this->input->post("phone");
        $reg_key = $this->input->post("reg_key");

        if (!empty($nama) && !empty($nbi))
        {
            $data = array(
                "nbi" => $nbi,
                "nama" => $nama,
                "phone" => $phone,
                "key" => $reg_key,
                "ip" => get_ip(),
                "name_pc" => get_pc_name()
            );

            $record = $this->Chooser_Model->insert("choosers", $data);
            if ($record)
            {
                redirect(base_url('admin/pemilih'));
            }
        }
        else
        {
            redirect(base_url('admin/register'));
        }
    }

    public function pemilih($page = 0)
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'admin/pemilih/';
        $config['total_rows'] = $this->Chooser_Model->count_data_tabel('choosers');
        $config['per_page'] = 30;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = '3';
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'next';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $this->data['num'] = (int) ($config['total_rows'] / $config['per_page']) + 1;

        $this->data['judul'] = "Pemilih";
        $this->data['deskripsi'] = "Daftar Pemilih";
        $this->data['content'] = "admin/pemilih/data";
        $segment = $this->uri->segment(3) ? (int) ($this->uri->segment(3) - 1) : 0;
        $this->data['segment'] = $segment;

        $this->data['user'] = $this->Chooser_Model->get_data_tabel("choosers", $config['per_page'], $segment * $config['per_page']);
        $data_user=$this->Chooser_Model->get_data_tabel("choosers", $config['per_page'], $segment * $config['per_page']);
        
        foreach ($data_user as $v)
        {
            $this->data['coblos'][$v['id_chooser']]=$this->Chooser_Model->cek_coblos($v['id_chooser']);
        }
        $this->load->view("admin/template", $this->data);
    }

    public function set_filter()
    {
        //Cek session untuk pencarian
        if (isset($_POST['filter']))
            $this->session->set_userdata('filter', $_POST['filter']);

        $this->data['filter'] = isset($this->session->userdata['filter']) ? $this->session->userdata['filter'] : NULL;
    }

    public function delete_pemilih()
    {
        $id_product = $this->uri->segment(3, '');
        if (!empty($id_product))
        {
            $detelet_pro = $this->Chooser_Model->delete("choosers", $id_product, 'id_chooser');
            // $detelet_coblos = $this->Chooser_Model->delete("chosseds", $id_product, 'id_chosser');
            $detelet_coblos = $this->Chooser_Model->delete("chosseds", $id_product, 'id_chosser');
            if ($detelet_pro)
            {
                redirect(base_url('admin/pemilih'));
            }
        }
    }

    //Kandidat
    public function register_kandidat()
    {
        $data['judul'] = "Register Kandidat";
        $data['deskripsi'] = "Pendaftaran Para Kandidat";
        $data['content'] = "admin/kandidat/index";
        $this->load->view('admin/template', $data);
    }

    public function add_kandidat()
    {
        $nbi = $this->input->post("nbi");
        $nama = $this->input->post("nama");
        $visi = $this->input->post("visi");
        $misi = $this->input->post("misi");

        $misi_s = array();
        for ($i = 0; $i < count($misi); $i++)
        {
            $misi_s[] = $misi[$i];
        }
        $misinya = implode(",", $misi_s);

        $data = array(
            "nbi" => $nbi,
            "nama" => $nama,
            "visi" => $visi,
            "misi" => $misinya,
            "id_administrator" => $_SESSION['admin'][0]['id_administrator'],
            "foto" => $_FILES['foto']['name']
        );

        $record = $this->Candidate_Model->insert("candidates", $data);
        if ($record)
        {
//            $config['upload_path'] = base_url('global/app/img/candidate/').'./global/app/img/candidate/';
            $config['upload_path'] = './global/app/img/candidate/';
            $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|png';
            $config['max_size'] = '2000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto'))
            {
                $data = $this->upload->display_errors();
            }
            else
            {
                $data = $this->upload->data();
            }
            redirect(base_url('admin/kandidat'));
        }
        else
        {
            redirect(base_url('admin/register_kandidat'));
        }
    }

    public function kandidat($page = 0)
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'admin/kandidat/';
        $config['total_rows'] = $this->Candidate_Model->count_data_tabel('candidates');
        $config['per_page'] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = '4';
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'next';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $this->data['num'] = (int) ($config['total_rows'] / $config['per_page']) + 1;

        $this->data['judul'] = "Kandidat";
        $this->data['deskripsi'] = "Daftar Kandidat";
        $this->data['content'] = "admin/kandidat/data";
        $segment = $this->uri->segment(4) ? (int) ($this->uri->segment(4) - 1) : 0;

        $this->data['user'] = $this->Candidate_Model->get_data_tabel("candidates", $config['per_page'], $segment * $config['per_page']);
        $this->load->view("admin/template", $this->data);
    }

    public function delete_kandidat()
    {
        $id_product = $this->uri->segment(3, '');
        if (!empty($id_product))
        {
            $detelet_pro = $this->Chooser_Model->delete("candidates", $id_product, 'id_candidate');
            if ($detelet_pro)
            {
                redirect(base_url('admin/kandidat'));
            }
        }
    }

    public function hasil()
    {
        $this->data['judul'] = "Hasil Pemungutan Suara";
        $this->data['deskripsi'] = "Data Hasil Pemilihan";
        $this->data['content'] = "admin/hasil/data";
        $segment = $this->uri->segment(4) ? (int) ($this->uri->segment(4) - 1) : 0;

        $this->data['user'] = $this->Candidate_Model->get_hasil();
        $this->data['total_pemilih'] = $this->Chooser_Model->count_data_tabel('choosers');
        $this->data['total_pencoblos'] = $this->Chooser_Model->get_data_pencoblos();
        $this->load->view("admin/template", $this->data);
    }

    public function laporan()
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'admin/laporan/';
        $config['total_rows'] = $this->Chooser_Model->count_data_tabel('choosers');
        $config['per_page'] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = '4';
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'first';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'next';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $this->data['num'] = (int) ($config['total_rows'] / $config['per_page']) + 1;

        $this->data['judul'] = "Laporan Pemilih";
        $this->data['deskripsi'] = "List Laporan Pemilih";
        $this->data['content'] = "admin/laporan/data";
        $segment = $this->uri->segment(4) ? (int) ($this->uri->segment(4) - 1) : 0;

        $this->data['user'] = $this->Chooser_Model->get_data_tabel_input("choosers", $config['per_page'], $segment * $config['per_page']);
        $this->load->view("admin/template", $this->data);
    }

    public function cetak_laporan()
    {
        $this->data['user']=$this->Chooser_Model->get_data_tabel("choosers", 500,0);
        $this->load->view("admin/laporan/cetak_laporan", $this->data);
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */