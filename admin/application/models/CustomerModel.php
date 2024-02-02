<?php 
class CustomerModel extends CI_Model
{
	public function checkUser($email, $enc_pass)
    {
        $sql="SELECT * FROM `customer` WHERE `customer_email`='$email' AND `customer_password`='$enc_pass' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function checkEmail($email)
    {
    	$sql="SELECT * FROM  `customer`  WHERE `customer_email`='$email' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function update($table, $colIdName, $id, $data)
    {
        $this->db->where($colIdName, $id);
        $result = $this->db->update($table, $data);
        return $result;
    }

    public function checkLoginToken($customer_id, $token)
    {
        $sql="SELECT * FROM `customer` WHERE `customer_id`='$customer_id' AND `token`='$token'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function getOrders($customer_id){
        // $this->db->order_by('order_id','DESC');
        $this->db->where('o.customer_id', $customer_id);
        $this->db->select('*');
        $this->db->from('orders as o');
        $this->db->join('general_order as g','g.order_id =o.order_id','left');
        return $this->db->get()->result_array();
    }

    public function getGeneralOrderData()
    {

        $this->db->select('*');

        $this->db->order_by('order_id','DESC');
        // $this->db->where('customer_id', $customer_id);
        $this->db->from('orders as o');
        $this->db->join('customer as c','o.customer_id = c.customer_id','left');
        $result = $this->db->get()->result_array();
        $outArr = array();
        foreach ($result as $row){
            $row['general_order'] = $this->getOrderData($row['order_id']);
            $outArr[] = $row;
        }
        return $outArr;
    }
    
    public function getSpecificOrderData($searchOrderID, $customer_id)
{
    $this->db->where(['shipment_no' => $searchOrderID, 'o.customer_id' => $customer_id]);
    $this->db->select('*');
    $this->db->from('orders as o');
    $this->db->join('general_order as g','g.order_id =o.order_id','left');
    $result = $this->db->get()->result_array();
    $outArr = array();
    foreach ($result as $row) {
        $row['general_order'] = $this->getOrderData($row['order_id']);
        $outArr[] = $row;
    }
    return $outArr;
}
  
public function getCusGeneralOrderData($customer_id)
{
    $this->db->order_by('order_id','DESC');
    $this->db->where('customer_id', $customer_id);
    $this->db->select('*');
    $this->db->from('orders');
    $result = $this->db->get()->result_array();
    $outArr = array();
    foreach ($result as $row) {
        $row['general_order'] = $this->getOrderData($row['order_id']);
        $outArr[] = $row;
    }
    return $outArr;
}
    public function getOrderData($order_id)
    {
        $this->db->where('order_id', $order_id);
        $this->db->select('*');
        $this->db->from('general_order');
        // $this->db->join('customer as c','g.customer_id = c.customer_id','left');
        $result = $this->db->get()->result_array();
        $outArr = array();
        foreach ($result as $row){
            $row['shipment_order'] = $this->getShipmentOrder($row['general_order_id']);
            $outArr[] = $row;
        }
        return $outArr;
    }

    public function getShipmentOrder($general_order_id){
        $this->db->where('general_order_id', $general_order_id);
        $this->db->select('*');
        $this->db->from('general_shipment_order');
        return $this->db->get()->result_array();
    }  

    public function general_order_info($general_order_id)
    {
        $this->db->where('general_order_id', $general_order_id);
        $this->db->select('*');
        $this->db->from('general_order');
        return $this->db->get()->row_array();
        
    } 
    public function getManageAccData($customer_id){
        $sql="SELECT * FROM `customer` WHERE `customer_id` = $customer_id ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    // public function checkPassword($login_id)
    // {
    //     $sql="SELECT * FROM `login` WHERE `login_id` = '$login_id' ";
    //     $query = $this->db->query($sql);
    //     return $query->row_array();
    // }


    public function allSampleRequestData($customer_id)
    {
        $this->db->select('*');
        $this->db->where('s.customer_id', $customer_id);
        $this->db->order_by('s.sample_request_id', 'DESC');
        $this->db->from('sample_request as s');
        $this->db->join('customer as c', 's.customer_id = c.customer_id', 'left');
      
        return $this->db->get()->result_array();
    }

    public function customerData($customer_id, $email)
    {
        $sql="SELECT * FROM `customer` WHERE `customer_id` != '$customer_id' AND `customer_email` = '$email' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
}