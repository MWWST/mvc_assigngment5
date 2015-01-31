<?php 
?>
<html>
<head>
	<title>Are you sure you want to delete a class</title>
	<link rel="stylesheet" href="http://host-2:8888/assets/css/skeleton.css">
	<style type="text/css">
	button.yes{
		background-color: red;
		/*width:200px;
		height:20px;*/
		color:white;
		font-size: 15px;
		border: 1px solid black;
		box-shadow: 5px 5px 2px #888888;
	}

	p {
		margin-left: 20px;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="ten columns offset-by-two columns">
				<h5> Are you sure you want to delete the following course?</h5>
				<p><?="Name:"." ".$title." "."</p><p>Description:"." ".$description;?></p>
				<?="<a href='/'><button>No</button></a>"." "."<a href='/courses/delete/".$id."/'><button class='yes'>Yes I want to delete this</button></a>";?>
			</div>
		</div>
	<div>
</body>
</html>