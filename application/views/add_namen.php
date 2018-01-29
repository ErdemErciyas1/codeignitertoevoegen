<!DOCTYPE html>
<html>
<head>

	<title>Add Character</title>
<link rel="stylesheet" href="<?php echo base_url('include/editnames.css')?>"?>	
</head>
<body>


<?php  
if (isset($data))
{
	?>

	<div id="flexcontainer">
	<h1 class=>Welkom </h1>

	<center class="center">Update User</center>

	<center>

	<?php echo form_open('Birthdays/updateuser'); ?>
	
		<table>
		<tr>
		<td>FirstName :</td>
		<td><input type="hidden" name="eid" required="" value="<?php echo $data->eid;?>" ></td>
		<td><input type="text" name="person" required="" value="<?php echo $data->person;?>" ></td>
		</tr>
		<tr>
		<td>Day :</td>
		<td><input type="text" name="day" required="" value="<?php echo $data->day;?>"></td>
		</tr>
		<tr>
		<td>Month :</td>
		<td><input type="text" name="month" required="" value="<?php echo $data->month;?>"></td>
		</tr> 
		
		</td>
		</tr>
		<tr>
		<td>Year :</td>
		<td><input type="text" name="year" required="" value="<?php echo $data->year;?>"></td>
		</tr>
		</table>
		<input type="submit"  class="add" name="add" value="Add">
	</center>

</div>

	<?php
}
else
{
	?>
	<div id="flexcontainer">
	<h1 class=>Welkom </h1>

	<center class="center">fill in your personal details</center>

	<center>

	<?php echo form_open('Birthdays/add_user'); ?>
	
		<table>
		<tr>
		<td>FirstName :</td>
		<td><input type="text" name="person" required="" ></td>
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
	<?php
}

?>






</body>
</html>
