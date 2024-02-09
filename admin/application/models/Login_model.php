<?php 
class Login_model extends CI_Model
{
	public function checkUser($email, $enc_pass, $type)
    {
        // login.....
        $sql="SELECT * FROM `login` WHERE `email`='$email' AND `password`='$enc_pass' AND `type`='$type' ";
        // $sql="SELECT * FROM `login` WHERE `email`='admin@gmail.com' AND `password`='1234' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function checkemail($email)
    {
    	$sql="SELECT * FROM  `login`  WHERE `email`='$email' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function checkGeneralOrderEmail($customer_id)
    {
    	$sql="SELECT * FROM  `customer` ";
        $query = $this->db->query($sql);
        return $query->row_array();
        // $this->db->select('*');
        // $this->db->from('orders as g');
        // $this->db->join('customer as c', 'g.customer_id = c.customer_id', 'left');
        // $this->db->where('g.customer_id', $customer_id);
        // return $this->db->get()->result_array();
    }
    
    public function checkEmailAddStaff($searchEmail)
    {
    	$sql="SELECT * FROM  `login` WHERE `email`= '$searchEmail' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function checkEmaileditStaff($searchEmail, $loginID)
    {
    	$sql="SELECT * FROM  `login` WHERE `email`= '$searchEmail' AND `login_id` != '$loginID' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function checkEmaileditCustomer($searchEmail, $customerId)
    {
    	$sql="SELECT * FROM  `customer` WHERE `customer_email`= '$searchEmail' AND `customer_id` != '$customerId' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function checkCustomerEmail($customer_email)
    {
    	$sql="SELECT * FROM  `customer`  WHERE `customer_email`='$customer_email' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function checkLoginToken($login_id, $token)
    {
        $sql="SELECT * FROM `login` WHERE `login_id`='$login_id' AND `token`='$token'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function checkCustomerToken($customer_id, $token)
    {
        $sql="SELECT * FROM `customer` WHERE `customer_id`='$customer_id' AND `token`='$token'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function update($table, $colIdName, $id, $data)
    {
        $this->db->where($colIdName, $id);
        $result = $this->db->update($table, $data);
        return $result;
    }
    public function updateCustomer($table, $colIdName, $id, $data)
    {
        $this->db->where($colIdName, $id);
        $result = $this->db->update($table, $data);
        return $result;
    }

}
?>