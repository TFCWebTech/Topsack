<?php 
class Staff_model extends CI_Model
{
	
    public function getStaffData(){
        // $this->db->select('*');
        $sql="SELECT * FROM `login` WHERE `login_id` != '1' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getCustomerData(){
        $this->db->select('*');
        $this->db->from('customer');
        return $this->db->get()->result_array();
    }

    public function getManageAccData($login_id){
        $sql="SELECT * FROM `login` WHERE `login_id` = $login_id ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function checkEmail(){
        $this->db->select('*');
        $this->db->from('login');
        return $this->db->get()->result_array();
    }

    public function userData($login_id, $email)
    {
        $sql="SELECT * FROM `login` WHERE `login_id` != '$login_id' AND `email` = '$email' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function checkPassword($login_id)
    {
        $sql="SELECT * FROM `login` WHERE `login_id` = '$login_id' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
}


