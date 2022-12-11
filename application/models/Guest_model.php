<?php
class Guest_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_guests()
    {
        $query = $this->db->query(
            'SELECT * FROM guest'
        );
        return $query->result_array();
    }
    public function get_guest($id)
    {
        $query = $this->db->query(
            "SELECT * FROM guest WHERE ID = '$id'"
        );
        if ($query->num_rows() < 1) {
            show_404();
        }
        return $query->row_array();
    }
    public function absen($id)
    {
        $data = array(
            'Stat' => 1,
        );
       
        $this->db->trans_start();
        $this->db->where('ID', $id);
        $this->db->update('guest', $data);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            show_404();
        }
    }
}
