<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Model extends MY_Model {

    //Pemilih
    function pemilih_exists($nbi)
    {
        $query = $this->db->get_where("choosers", array("nbi" => $nbi));
        return $query->num_rows();
    }
    
    function check_pemilih_exists($nbi, $nama) 
    {
        $query = $this->db->get_where("choosers", array("nbi" => $nbi,"key" => $nama));
        return $query->num_rows();
    }
    
    function get_data_pemilih($nbi) 
    {
        $query = $this->db->get_where("choosers", array("nbi" => $nbi));
        return $query->result_array();
    }

    function set_last_login($nbi, $key) 
    {
        $date = date("Y-m-d H:i:s");
        $this->db->where("nbi", $nbi);
        $this->db->update("choosers", array("last_login" => $date));
        return $this->db->affected_rows();
    }
    
    //Admin
    function admin_exists($username)
    {
        $query = $this->db->get_where("administrators", array("username" => $username));
        return $query->num_rows();
    }
    
    function check_admin_exists($username, $password) 
    {
        $query = $this->db->get_where("administrators", array("username" => $username,"password" => $password));
        return $query->num_rows();
    }
    
    function get_data_admin($username) 
    {
        $query = $this->db->get_where("administrators", array("username" => $username));
        return $query->result_array();
    }

    function set_last_login_admin($username) 
    {
        $date = date("Y-m-d H:i:s");
        $this->db->where("username", $username);
        $this->db->update("administrators", array("last_login" => $date));
        return $this->db->affected_rows();
    }
    
}

/* End of file user_model.php */

/* Location: ./application/models/user_Model.php */