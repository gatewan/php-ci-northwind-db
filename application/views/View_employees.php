<?php
$this->load->view('Beranda/Header');

echo heading($title,3);
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'No.',
'Full Name',
'Birth Date');

  foreach($array_emp->result() as $row):
  $this->table->add_row(
   $row->EmployeeID,
   $row->FirstName ." ".$row->LastName,
   $row->BirthDate
   );
  endforeach;
  echo $this->table->generate();

$this->load->view('Beranda/Main');
?>
