<html>
<head>
<title>Calendar</title>
<link rel="stylesheet" href="<?php echo base_url('include/style.css')?>"/>

</head>
<body>

<ul>
<div class="flexcontainer">
<?php

$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
foreach($birthdays as $_key => $_value) {?>

 <h2><ul><?=$month[$_value->month -1]?></ul></h2>
 <h1><ul><?=$_value->day?></ul></h1>
 <a><?=$_value->person?></a>
 

 <?php }  ?>
</div>

</ul>



                <p><a href="<?php echo site_url('namen_datum');?>" id="namen">+ Toevoegen</a></p>




</body>
</html>