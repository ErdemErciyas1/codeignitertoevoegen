<html>
<head>
<title>Calendar</title>

<link rel="stylesheet" href="<?php echo base_url('include/style.css')?>"/>

</head>
<body>

<ul>
<div class="flexcontainer">
<?php

// deze gegevens worden geladen uit de database.
$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
foreach($birthdays as $_key => $_value) {?>
 <a><?=$_value->person?></a>


 <td><a href="<?php echo site_url('Birthdays/Edit/' . $_value->id);?>" id="namen">Edit</a><td>

 <td><a href="<?php echo site_url('Birthdays/delete/?id=' . $_value->id); ?>" class="buttonkleur">Delete</a></td>



 <h2><ul><?=$month[$_value->month -1]?></ul></h2>
 <h1><ul><?=$_value->day?></ul></h1>




 

 <?php }  ?>
</div>

</ul>



                <p><a href="<?php echo site_url('Birthdays/Create');?>" id="namen">+ Toevoegen</a></p>


</body>
</html>