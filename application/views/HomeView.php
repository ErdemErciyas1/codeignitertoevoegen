<?php


echo "Records from the database.<br/>";
echo "You're succesfully done, the Model is linked with the database.<br/> ";


foreach ($records as $rec){ 
	
	echo $rec->id.'     '.$rec->person.' <br>  ' ;

}



?>