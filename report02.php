<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reports in PHP</title>
	<link rel="stylesheet" href="css/style3.css">
</head>
<body>
	<div class="container">
		<h1>Reports for Photography Club</h1>
	</div>
	<div class="data">
		<form class="myreport" action="report02.php" method="POST">
			<select name='ting'>
				<option>Tingkatan</option>
				<?php
				$query1 = "SELECT DISTINCT tingkatan FROM club_member ORDER BY tingkatan ASC";
				$result1 = mysqli_query($con, $query1);
				$menu1 = "";
				while ($row1 = mysqli_fetch_array($result1)) {
    			echo "<option value =" . $row1['tingkatan'] . ">" . $row1['tingkatan'] . "</option>";
					}
				?>


			</select>
			<input type="submit" name="submit" class="submit"/>
			<input type="button" onclick="location.href='input01.php'" class="submit1" value="Back to Enter Data"/>

			<table border="1" class="table">
    		<tr>
   			     <th>Nama</th>
      			  <th>Tingkatan</th>
      			  <th>Jantina</th>
      			  <th>Photo Marks</th>
   		 	</tr>

    		<?php
    		if(isset($_POST['submit'])){
       		$tingform = $_POST['ting'];
        	$query3 = "SELECT * FROM club_member WHERE tingkatan ='$tingform' ORDER BY Name ASC";
        	$result3 = mysqli_query($con, $query3);

        	while($row3 = mysqli_fetch_array($result3)){
            $a = $row3['nama'];
            $b = $row3['tingkatan'];
            $c = $row3['jantina'];
            $d = $row3['markah'];
    		?>
    	<tr>
        	<td><?php echo $a; ?></td>
        	<td><?php echo $b; ?></td>
        	<td><?php echo $c; ?></td>
        	<td><?php echo $d; ?></td>
    	</tr>
    <?php
        }
    }
    ?>
</table>		
		</form>
	</div>
</body>
</html>