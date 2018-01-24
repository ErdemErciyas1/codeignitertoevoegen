<!DOCTYPE html>
<html>
<head>

	<title>Input Character</title>
<link rel="stylesheet" href="<?php echo base_url('include/clicknamen.css')?>"?>	
</head>
<body>
<div id="flexcontainer">
	<h1>Edit your personal information </h1>

	<center class="center">fill in your personal details</center>

	<center>
	<?php echo form_open('create/add_user'); ?>
	
		<table>
		<tr>
		<td>FirstName :  </td>
		<td> <input type="text" name="person" value="<?php echo $_GET['id'];?>"></td>
		</tr>

				<tr>
		<td>Year :</td>
		<td><input type="text" name="year"></td>
		</tr>
		</table>
		<input type="submit"  class="add" name="add" value="Edit">
	</center>


</div>





</body>
</html>
