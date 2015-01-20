<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Candidate_Model extends MY_Model {



    function pemilih_exists($nbi)

    {

        $query = $this->db->get_where("choosers", array("nbi" => $nbi));

        return $query->num_rows();

    }



    function check_pemilih_exists($nbi, $nama)

    {

        $query = $this->db->get_where("choosers", array("nbi" => $nbi, "nama" => $nama));

        return $query->num_rows();

    }



    function get_data_pemilih($nbi)

    {

        $query = $this->db->get_where("choosers", array("nbi" => $nbi));

        return $query->result_array();

    }



    function set_last_login($nbi)

    {

        $date = date("Y-m-d H:i:s");

        $this->db->where("nbi", $nbi);

        $this->db->update("choosers", array("last_login" => $date));

        return $this->db->affected_rows();

    }



    function get_hasil()

    {

        $sql = "select k.*, (select count(*) from fp_chosseds where choose = id_candidate and id_chosser IS NOT NULL) as hasil from fp_candidates k;";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

    function cek_data_pemilih($id){

        $query = $this->db->get_where("chosseds", array("id_chosser" => $id));

        return $query->num_rows();

    }



}



/* End of file user_model.php */



/* Location: ./application/models/user_Model.php */