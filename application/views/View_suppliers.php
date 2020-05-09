<?php
$this->load->view('Beranda/Header');

echo heading($title,3);
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'Supplier ID',
'Company Name',
'Address',
'City',
'Country',
'Phone');

  foreach($array_emp->result() as $row):
  $this->table->add_row(
   $row->SupplierID,
   $row->CompanyName,
   $row->Address,
   $row->City,
   $row->Country,
   $row->Phone
   );
  endforeach;
  echo $this->table->generate();

  $this->load->view('Beranda/Main');
?>