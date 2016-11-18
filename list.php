<?php
	$list=$_GET['name'];
	
	foreach(glob($list.'/*.mp3',GLOB_NOSORT) as $dir)   
	{  		
		$check=str_replace(" ","%20",$dir);
		$dir=strstr($dir,'/');
		$dir=substr_replace($dir,"",0,1);
		$dir=strstr($dir,'/');
		$dir=substr_replace($dir,"",0,1);
		$dir=str_replace(".mp3","",$dir);
	echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		<div style='margin-bottom: 15px;
    padding: 4px 12px;background-color: #e7f3fe;
    border-left: 6px solid #2196F3;'>
  ".$dir."<a  href='/".$check."' target='player' style='float:right;'><span class='glyphicon glyphicon-play'></span></a><br/>
</div>";
	} 
?>