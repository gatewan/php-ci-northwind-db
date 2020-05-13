<!DOCTYPE html>
<html>
<head>
	<title>Membuat Pagination Pada CodeIgniter</title>
</head>
<body>
<h1>Membuat Pagination Pada CodeIgniter</h1>
	<table border="1">
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>alamat</th>
			<th>pekerjaan</th>		
		</tr>
		<?php 
		$no = $this->uri->segment('2') + 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->EmployeeID ?></td>
			<td><?php echo $u->LastName ?></td>
			<td><?php echo $u->City ?></td>
		</tr>
	<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
</body>
</html>