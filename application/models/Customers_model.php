<?php
class Customers_model extends CI_Model{
 
 public function get_customers(){
  return $this->db->get("customers"); //cara 1
  
  /*
  Ada 2 cara untuk manajemen database class:
   cara 1, sebagaimana diatas.
   cara 2, menjalankan query secara lengkap --> $this->db->query('SELECT * FROM employees');
  
  Apabila ada klausa tambahan :
   cara 1, masih tetap --> $this->db->get('categories');
   cara 2, $this->db->like(' CategoryName',' Beverages');
  */
  
 }
 
 
}

?>