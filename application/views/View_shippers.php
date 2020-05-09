<?php
$this->load->view('Beranda/Header');

echo heading($title,3);
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'Shipper ID',
'Company Name',
'Phone');

  foreach($array_emp->result() as $row):
  $this->table->add_row(
   $row->ShipperID,
   $row->CompanyName,
   $row->Phone
   );
  endforeach;
  echo $this->table->generate();

  $this->load->view('Beranda/Main');
?>