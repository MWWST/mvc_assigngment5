<?php 
?>
<html>
<head>
	<title>Are you sure you want to delte a class</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve column">
				<h2> Are you sure you want to delte the following course</h2>
				<p><?=$id." ".$title;?></p><?=$id;?>
				<?="<a href='/'><button>No</button></a>"." "."<a href='/courses/delete/".$id."/'><button>Yes</button></a>";?>
			</div>
		</div>
	<div>
</body>
</html>