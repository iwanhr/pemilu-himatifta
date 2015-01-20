<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
        $data["page_title"] 			= "Dashboard | Shoop!";
    	$data['navleft']["dashboard"] 	= "class='active'";

        $data['content'] = $this->load->view("hasil_v");
		$this->load->view("template_v", $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */