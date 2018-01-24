<!DOCTYPE html>
<html>
<head>

	<title>Input Character</title>
<link rel="stylesheet" href="<?php echo base_url('include/editnames.css')?>"?>	
</head>
<body>
<div id="flexcontainer">
	<h1 class=>Welkom </h1>

	<center class="center">fill in your personal details</center>

	<center>
	<?php echo form_open('create/add_user'); ?>
	
		<table>
		<tr>
		<td>FirstName :</td>
		<td><input type="text" name="person" required=""></td>
		</tr>
		<tr>
		<td>Day :</td>
		<td><input type="text" name="day" required=""></td>
		</tr>
		<tr>
		<td>Month :</td>
		<td><input type="text" name="month" required=""></td>
		</tr> 
		
		</td>
		</tr>
		<tr>
		<td>Year :</td>
		<td><input type="text" name="year" required=""></td>
		</tr>
		</table>
		<input type="submit"  class="add" name="add" value="Add">
	</center>

</div>





</body>
</html>
