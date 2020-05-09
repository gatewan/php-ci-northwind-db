<?php
/*
Menampilkan Tabel Categories
Oleh Wawan Beneran
gatewan.com
*/
class Categories extends CI_Controller{
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Categories_model','CTM'); //cara 1.
  
  /*
  Ada 2 cara untuk memanggil model:
   cara 1, diload disetiap class yang membutuhkannya. sebagaimana diatas.
   cara 2, diload secara otomatis di application\config\autoload.php :
   Pada line 135, Anda bisa menambahkan semacam ini:
   
   $autoload['model'] = array('Employee_model'); 
   jika sudah disebutkan disini, maka tidak perlu disebutkan lagi disetiap construct.
   
   Tambahan:
   $autoload['model'] = array('Employee_model'=>'em');
   'Employee_model'=>'em' -> 'em' digunakan untuk menyingkat pemangilan model di class lain
  */

 }
 
 public function index(){
  /*echo "<h1>Data Employees</h1>";
  $query = $this->Employee_model->get_employee();
  foreach($query->result() as $row):
   echo $row->EmployeeID.'. '.$row->FirstName ." ".$row->LastName;
   echo "<br />";
  endforeach;
  */
  $data["title"] = "<h1>Data Categories</h1>";
  $data["array_emp"] = $this->CTM->data_categories();
  $this->load->view('View_categories',$data);
 }
 
}

?>