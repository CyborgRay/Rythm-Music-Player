<!DOCTYPE html>
<html>
<head>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
</style>
</head>
<body>

<?php
	foreach(glob('Hindi/*',GLOB_NOSORT) as $list) 
  	{  
?>	<a href='list.php?name=".$dir."' target='list'>		
	

<div class="card">
  <img src="<?php $pic=$list.'/folder.jpg';echo $pic?>" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php echo $list;?></b></h4>    
  </div>
</div>
	<?php } ?>
	</a>
</body>
</html>