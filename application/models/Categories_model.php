<?php
class Categories_model extends CI_Model{
 
 public function data_categories(){
  $sql = "SELECT
    c.CategoryID,
    c.CategoryName,
    COUNT(*) AS jumlah
    FROM
  categories AS c JOIN products AS p
  ON c.CategoryID=p.categoryID
  GROUP BY c.categoryID";
  return $this->db->query($sql);
 }
 
}

?>