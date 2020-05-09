<?php
class Orders_model extends CI_Model{
 
 public function data_orders(){
  $sql = "SELECT
    orders.OrderID,
	orders.CustomerID,
	orders.OrderDate,
	orders.ShipAddress,
	orders.ShipCountry,
	customers.CustomerID,
	customers.CompanyName
    FROM orders INNER JOIN customers
	ON orders.CustomerID = customers.CustomerID";
  return $this->db->query($sql);
 }
 
}

?>