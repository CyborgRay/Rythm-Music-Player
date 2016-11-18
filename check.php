<?php
	foreach(glob('Hindi/*',GLOB_NOSORT) as $list)   	{  		
		
	foreach(glob($list.'/*.jpg',GLOB_NOSORT) as $dir)   
	{  			
	echo "<p>".$dir."</p><br/>";	
	} 
	}  
?>