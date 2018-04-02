<!DOCTYPE html>
<html>
<head>
	<title>Giao dien</title>
</head>
<meta charset="utf-8">
<body>
	<?php
		$dbc=mysqli_connect("localhost", "root","","dbwebtintuc");
		if(!$dbc){
			echo "Ket noi khong thanh cong";
		}
		else {
			mysqli_set_charset($dbc,'utf8');
		}
		$sql = "SELECT * FROM `dmbaiviet`";
		$tb = mysqli_query($dbc,$sql);
	?>
    <div class=class="text-center">Danh mục</div>
                <table width="300 px", border="1" >
						<tr class="bg-info">
							<td>id</td>
							<td>title</td>
							<td>edit</td>
							<td>delete</td>
						</tr>
						<?php 
							while($row = mysqli_fetch_array($tb, MYSQLI_ASSOC))
							{
						?>
						<tr>
							<td> <?php echo $row["IDDanhMuc"]; ?></td>
							<td><?php echo $row["TenDM"];?></td>
							<td><a href="">edit</a></td>
							<td><a href="delete.php?IDDanhMuc=<?php echo $row['IDDanhMuc']; ?>" class="delete">delete</a></a></td>
						</tr>
						<?php
							}
						?>
					</table>
</body>
</html>