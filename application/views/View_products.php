<?php
$this->load->view('Beranda/Header');

echo heading($title,3);
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'Product ID',
'Product Name',
'Quantity Per Unit',
'Stock');

  foreach($array_emp->result() as $row):
  $this->table->add_row(
   $row->ProductID,
   $row->ProductName,
   $row->QuantityPerUnit,
   $row->UnitsInStock
   );
  endforeach;
  echo $this->table->generate();

  $this->load->view('Beranda/Main');
?>
