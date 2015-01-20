<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model { 
	
	public function __construct()
	{
		parent::__construct();
	}

    function count_data($tabel, $filter = NULL)
    {
        $fields = $this->db->list_fields($tabel);

        if ($this->session->userdata('filter'))
            $filter = $this->session->userdata('filter');

        $iterasi = 1;
        $num = count($fields);
        $where = "";
        foreach ($fields as $field)
        {
            if ($iterasi == 1)
            {
                $where .= "(" . $field . " LIKE '%" . $filter . "%' ";
            }
            else if ($iterasi == $num)
            {
                $where .= "OR " . $field . " LIKE '%" . $filter . "%') ";
            }
            else
            {
                $where .= "OR " . $field . " LIKE '%" . $filter . "%' ";
            }

            $iterasi++;
        }
        $this->db->where($where);

        $this->db->from($tabel);
        return $this->db->count_all_results();
    }
    
    function count_data_tabel($tabel)
    {
        $this->db->from($tabel);
        return $this->db->count_all_results();
    }

    function get_data($tabel, $limit = NULL, $offset = NULL, $filter = NULL)
    {
        $fields = $this->db->list_fields($tabel);

        if ($this->session->userdata('filter'))
            $filter = $this->session->userdata('filter');

        $iterasi = 1;
        $num = count($fields);
        $where = "";
        foreach ($fields as $field)
        {
            if ($iterasi == 1)
            {
                $where .= "(" . $field . " LIKE '%" . $filter . "%' ";
            }
            else if ($iterasi == $num)
            {
                $where .= "OR " . $field . " LIKE '%" . $filter . "%') ";
            }
            else
            {
                $where .= "OR " . $field . " LIKE '%" . $filter . "%' ";
            }

            $iterasi++;
        }
        $this->db->where($where);

        $this->db->limit($limit, $offset);
        $query = $this->db->get($tabel);
        $data = $query->result_array();

        return $data;
    }
    function get_data_tabel($tabel, $limit = NULL, $offset = NULL)
    {
        $this->db->limit($limit, $offset);
        $query = $this->db->get($tabel);
        $data = $query->result_array();

        return $data;
    }

    function get_all_data($tabel)
    {
        $query = $this->db->get($tabel);
        $data = $query->result_array();

        return $data;
    }

    function get_single($tabel, $id, $field)
    {
        $data = array();

        $query = $this->db->get_where($tabel, array($field => $id));
        $data = $query->row_array();

        return $data;
    }

    function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }

    function update($tabel, $id, $data, $field)
    {
        $this->db->where($field, $id);
        $this->db->update($tabel, $data);

        return $this->db->affected_rows();
    }

    function delete($tabel, $id, $field)
    {
        $this->db->where($field, $id);
        $this->db->delete($tabel);

        return $this->db->affected_rows();
    }
	
}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */