<!DOCTYPE html>
<html>
<head>
	<title>Input Character</title>
	<link rel="stylesheet" href="<?php echo base_url('include/editnamen.css')?>"/>
</head>
<body>
<h1> Calendar deel 2</h1>

<div id="flexcontainer">

<center class="center">fill in your personal details</center>

	<center>
	<?php echo form_open('namen_datum/add_user'); ?>
	
	<table>
	<tr>
	<td>FirstName :</td>
	<td><input type="text" name="person"></td>
	</tr>
	<tr>
	<td>Day :</td>
	<td><input type="text" name="day"></td>
	</tr>
	<tr>
	<td>Month :</td>
	<td><input type="text" name="month"></td>
	</tr> 
	
	</td>
	</tr>
	<tr>
	<td>Year :</td>
	<td><input type="text" name="year"></td>
	</tr>
	</table>
	<input type="submit"  class="add" name="add" value="Add">
	</center>







</body>
</html>