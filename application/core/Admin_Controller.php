<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (in_array($this->uri->segment(3), array('user')))
        {
            $this->session->set_userdata('current', uri_string());
        }
        
        if ($this->session->userdata('uri') !== $this->uri->segment(3))
        {
            $this->_unset_all();
            $this->session->set_userdata('uri', $this->uri->segment(3));
        }

        if ($this->is_logged_in() === FALSE)
        {
            redirect('admin/login');
        }

        //$this->output->enable_profiler(TRUE);

    }

    public function is_logged_in()
    {
        if ($this->session->userdata('admin'))
            return TRUE;
        else
            return FALSE;
    }

    public function print_pre($obj)
    {
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
    }

    public function forbidden($role)
    {
        if ($this->session->userdata['login']['type'] > $role)
        {
            $message_403 = "Anda tidak memiliki akses untuk membuka alamat ini.";
            show_error($message_403, 403, "Forbidden Access!!!");
        }
    }

    public function set_filter()
    {
        //Cek session untuk pencarian
        if (isset($_POST['filter']))
            $this->session->set_userdata('filter', $_POST['filter']);

        $this->data['filter'] = isset($this->session->userdata['filter']) ? $this->session->userdata['filter'] : NULL;
    }

    private function _unset_all()
    {
        $this->session->unset_userdata('filter');
    }    

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */