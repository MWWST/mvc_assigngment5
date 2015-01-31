<?php

?>
<html>
<head>
	<title>Add a stdent to all bootcamp courses</title>

	<link rel="stylesheet" href="./assets/css/skeleton.css">
</head>
<body>
	<div class="container">
		<form action="courses/add" method="post">
		Name:<input type="text" name="title">
		Description:<input type="text" name="description">
		<input type="submit" name="submit" value="SUBMIT!">
		<input type="hidden" name="add_course" value="add_course">
</form>	

		<div class="row"> 
			<div class="twelve columns">
				<table>
					<thead>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
						<th>Created at</th>
						<th>Updated at</th>
						<th>Delete</th>
					</thead>		
					<tr>
						<?php foreach ($value as $key => $record) {
							// var_dump($record); 
							echo "<tr>";
								foreach($record as $item =>$data) {
									echo "<td>".$data."</td>";
						} 

						echo"<td><a href='courses/delete/".$record['id']."'/>Delete</a></td></tr>";}?>
				</table>
			</div>


		</div>
	</div>
</body>
</html>