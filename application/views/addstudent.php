<?php

?>
<html>
<head>
	<title>Add a stdent to all bootcamp courses</title>

	<link rel="stylesheet" href="./assets/css/skeleton.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="four columns offset-by-four columns">
				<h4>Add a class</h4>
				<form action="courses/add" method="post">
				Name:<input type="text" name="title">
				Description:<input type="text" name="description">
				<input type="submit" name="submit" value="SUBMIT!">
				<input type="hidden" name="add_course" value="add_course">
				</form>	
			</div>
		</div>

		<div class="row"> 
			<div class="ten columns offset-by-one column">
				<table>
					<thead>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
						<th>Created at</th>
						<th>Delete</th>
					</thead>		
					<tr>
						<?php foreach ($value as $key => $record) {
							// var_dump($record); 
							echo "<tr>";
								foreach($record as $item =>$data) {
									echo "<td>".$data." ";
						} 

						echo"<a href='courses/destroy/".$record['id']."'/>Delete</a></td></tr>";}?>
				</table>
			</div>


		</div>
	</div>
</body>
</html>