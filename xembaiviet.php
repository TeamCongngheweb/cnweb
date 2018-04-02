<!DOCTYPE html>
<html>
<head>
	<title>xembaiviet</title>
</head>
<meta charset="utf-8">
<body>
   <?php
		$dbc=mysqli_connect("localhost", "root","","dbwebtintuc");
		if(!$dbc) {
			echo "Ket noi khong thanh cong";
		}
		else {
			mysqli_set_charset($dbc,'utf8');
		}
		$abc = "SELECT * FROM `baiviet`";
		$co = mysqli_query($dbc,$abc);
	?>
    <div class=class="text-center">Bài Viết</div>
       	 		<table width="1000 px", border="1">
						<tr class = "bg-info">
							<td>id</td>
							<td>title</td>
							<td>cat</td>
							<td>edit</td>
							<td>delete</td>
						</tr>
						<?php
							while($row = mysqli_fetch_array($co, MYSQLI_ASSOC))
							{
						?>
						<tr>
							<td><?php echo $row["IDBaiViet"];?></td>
							<td><?php echo $row["TieuDe"];?></td>
							<td><?php echo $row["NoiDung"];?></td>
							<td><a href="">edit</a></td>
							<td><a href=""><td><a href="delete.php?IDBaiViet=<?php echo $row['IDBaiViet']; ?>" class="delete">delete</a></td>
						</tr>
						<?php
							}
						?>
					</table>
</body>
</html>