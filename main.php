<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body
		{
			margin:0px;
		}
		.upper
		{
			width:100%;
			height:90%;
		}
		.upper-left
		{
			width:5%;
			height:100%;
			text-align: center;
			background-color: #555;
			float:left;			
		}
		.upper-right
		{
			width:95%;
			height:100%;			
			float:left;
		}
		.lower
		{
			width:100%;
			height:10%;
			background-color: black;
		}		
		.upper-left span 
		{
			padding: 16px;
			display: block;
			transition: all 0.3s ease;
			color: white;
			font-size: 36px;
		}
		.upper-left span:hover 
		{
			background-color: #000;
		}		
		.player-left-left
		{
			width:5%;
			height:100%;
			background-color:green;
		}
		.upper-right-frame
		{
			width:100%;
			height:100%;
		}
	</style>
</head>

<body>
	
	<div class="upper">
		<div class="upper-left">
			<span class="glyphicon glyphicon-list"></span>
			<span class="glyphicon glyphicon-search"></span>
			<a href="hindi.php" target="frame"><span class="glyphicon glyphicon-cd"></span></a>
			<span class="glyphicon glyphicon-user"></span>			
		</div>
		<div class="upper-right">
			<iframe class="upper-right-frame" name="frame"></iframe>
		</div>
	</div>
	
	<div class="lower">		
		<div class="player-left-left"></div>
		<div class="player-left-right"></div>		
		<div class="player-mid"></div>
		<div class="player-right"></div>
	</div>
	
</body>

</html>