<?php 
class Orders_model extends CI_Model
{
	public function insert($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }


    public function allSampleRequestData()
    {

        $this->db->select('*');
        $this->db->order_by('sample_request_id','DESC');
        $this->db->from('sample_request as s');
        $this->db->join('customer as c','s.customer_id = c.customer_id','left');
        return $this->db->get()->result_array();
    }

    public function getCustomerData(){
        $this->db->select('*');
        $this->db->from('customer');
        return $this->db->get()->result_array();
    }

    public function getPendingOrders($status){
        $this->db->where('order_status', $status);
        $this->db->select('order_status');
        $this->db->from('orders');
        return $this->db->get()->result_array();
    }

    public function getTransitDetails(){
        $this->db->where('order_status >', 0);
        $this->db->select('order_status');
        $this->db->from('orders');
        return $this->db->get()->result_array();
    }    
    
    public function getGeneralOrderData()
    {
        $this->db->order_by('order_id','DESC');
        $this->db->select('*');
        $this->db->from('orders as o');
        $this->db->join('customer as c','o.customer_id = c.customer_id','left');
        // $this->db->join('general_order as g','o.order_id = g.order_id ','left');
        $result = $this->db->get()->result_array();
        $outArr = array();
        foreach ($result as $row){
            $row['general_order'] = $this->getOrderData($row['order_id']);
            $outArr[] = $row;
        }
        return $outArr;
    } 

    public function getCompOrderData()
    {
        $this->db->where('order_status =',2);
        $this->db->select('*');
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
    public function getSpecificOrderData($searchOrderID, $search_value)
    {
        $this->db->order_by('o.order_id','DESC');
        if($search_value === 'order_id'){
        $this->db->where('o.'. $search_value, $searchOrderID);
        }elseif($search_value === 'shipment_no'){
            $this->db->where('g.'. $search_value, $searchOrderID);
        }elseif($search_value === 'customer_name'){
            // $this->db->where('c.'. $search_value, $searchOrderID);
            $this->db->like('c.' . $search_value, $searchOrderID);
        }
        $this->db->select('*');
        $this->db->from('orders as o');
        $this->db->join('general_order as g','o.order_id = g.order_id','left');
        $this->db->join('customer as c','o.customer_id = c.customer_id','left');
        $result = $this->db->get()->result_array();
        $outArr = array();
        foreach ($result as $row){
            $row['general_order'] = $this->getOrderData($row['order_id']);
            $outArr[] = $row;
        }
        return $outArr;
    }
     
    // public function getspecificCompOrderData($searchOrderID, $search_value)
    // {
        // $this->db->where(['order_id' => $searchOrderID, 'order_status =' => 2]);
    //     $this->db->order_by('o.order_id','DESC');
    //     if($search_value === 'order_id'){
    //     $this->db->where('o.'. $search_value, $searchOrderID, 'order_status =>', '2');
    //     }elseif($search_value === 'shipment_no'){
    //         $this->db->where('g.'. $search_value, $searchOrderID, 'order_status =>', '2');
    //     }elseif($search_value === 'customer_name'){
    //         // $this->db->where('c.'. $search_value, $searchOrderID);
    //         $this->db->like('c.' . $search_value, $searchOrderID, 'order_status =>', '2');
    //     }
    //     $this->db->select('*');
    //     $this->db->from('orders');
    //     $result = $this->db->get()->result_array();
    //     $outArr = array();
    //     foreach ($result as $row){
    //         $row['general_order'] = $this->getOrderData($row['order_id']);
    //         $outArr[] = $row;
    //     }
    //     return $outArr;
    // }
    public function getspecificCompOrderData($searchOrderID, $search_value)
    {
        $this->db->order_by('o.order_id', 'DESC');
        if ($search_value === 'order_id') {
            $this->db->where('o.' . $search_value, $searchOrderID);
            $this->db->where('order_status', '2');
        } elseif ($search_value === 'shipment_no') {
            $this->db->where('g.' . $search_value, $searchOrderID);
            $this->db->where('order_status', '2');
        } elseif ($search_value === 'customer_name') {
            $this->db->like('c.' . $search_value, $searchOrderID);
            $this->db->where('order_status', '2');
        }
        $this->db->select('*');
        $this->db->from('orders as o');
        $this->db->join('general_order as g','o.order_id = g.order_id','left');
        $this->db->join('customer as c','o.customer_id = c.customer_id','left');
        $result = $this->db->get()->result_array();
        $outArr = array();
        foreach ($result as $row){
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

    public function general_order_info($general_order_id)
    {
        $this->db->where('general_order_id', $general_order_id);
        $this->db->select('*');
        $this->db->from('general_order');
        return $this->db->get()->row_array();
        
    }
    
    public function sample_request_info($customer_id)
    {
        $this->db->where('customer_id', $customer_id);
        $this->db->select('*');
        $this->db->from('sample_request');
        return $this->db->get()->row_array();
        
    }
    
    public function getShipmentOrder($general_order_id){
        $this->db->where('general_order_id', $general_order_id);
        $this->db->select('*');
        $this->db->from('general_shipment_order');
        return $this->db->get()->result_array();
    }  
   
    public function getOrders(){
        $this->db->select('*');
        $this->db->from('orders');
        return $this->db->get()->result_array();
    }
    
    public function getOrdersPlacedData(){
        $this->db->where('order_status =', 0);
        $this->db->select('order_status');
        $this->db->from('orders');
        return $this->db->get()->result_array();
    }
    public function getOrdersDispatchData(){
        $this->db->where('order_status =', 1);
        $this->db->select('order_status');
        $this->db->from('orders');
        return $this->db->get()->result_array();
    }
    public function getOrdersCompleatedData(){
        $this->db->where('order_status =', 2);
        $this->db->select('order_status');
        $this->db->from('orders');
        return $this->db->get()->result_array();
    }


    public function checkShipmentNo($searchShipmentNo)
    {
    	$sql="SELECT * FROM  `general_order` WHERE `shipment_no`= '$searchShipmentNo' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
   
}