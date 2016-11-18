<html><body>
<?php
	foreach(glob('Hindi/*',GLOB_NOSORT) as $dir)   
	{  
		$dirc=strstr($dir,'/');
		$dirc=substr_replace($dirc,"",0,1);		
  	{  
?>	<a href=<?php echo"'list.php?name=".$dir."'" ?> target='list'>		
	

<div class="card">
  <img src="<?php $pic=$dir.'/folder.jpg';echo $pic?>" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php echo $dirc;?></b></h4>    
  </div>
</div>
	<?php }}
?>
</body></html>