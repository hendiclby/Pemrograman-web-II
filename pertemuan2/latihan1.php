<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel</title>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="3">
	<tr>
		<th>KOLOM 1</th>
		<th>KOLOM 2</th>
		<th>KOLOM 3</th>
		<th>KOLOM 4</th>
		<th>KOLOM 5</th>
		
	</tr>

	<?php 
	$rows = 15;
	$cols = 5;

	echo "<tr>";
	echo "</tr>";
	for ($i = 1; $i <= $rows; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $cols; $j++) {
		echo "<td>Baris $i, Kolom $j</td>";
	}
		echo "</tr>";

	}
	echo "</table>";
	

	 ?>
	

 	

	
</table>

</body>
</html>