<?php
	session_start();
	include "database.php";
	if(!isset($_SESSION["AId"])) 
	{
		header("location:alogin.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wonders of Kerala</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="overlay"></div>
	<div class="admin-wrapper">
		<header>
			<img src="images/kerala-logo.JPG" alt="Kerala Logo" class="logo">
			<h1>Explore Kerala - By Road, River, Nature & Soul</h1>
			<p>Entae Keralam - Where Beauty Meets Soul !!</p>
			<nav>
				<a href="logout.php">Logout</a>
			</nav>
		</header>
		<div class="main">
			<h2>Traveller Details</h2>
			<?php
				$sql = "SELECT * FROM travel";
				$res = $conn->query($sql);
				if ($res->num_rows > 0) 
				{
					echo "<table>
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>E-Mail</th>
							<th>Destination</th>
							<th>Start Date</th>
							<th>End Date</th>
						</tr>";
					$i = 0;
					while ($row = $res->fetch_assoc()) 
					{
						$i++;
						echo "<tr>";
						echo "<td>{$i}</td>";
						echo "<td>{$row['Name']}</td>";
						echo "<td>{$row['Mail']}</td>";
						echo "<td>{$row['Dest']}</td>";
						echo "<td>{$row['Start']}</td>";
						echo "<td>{$row['End']}</td>";
						echo "</tr>";
					}
					echo "</table>";
				} 
				else 
				{
					echo "<p class='error'>No Traveller Record Found</p>";
				}
			?>
		</div>
	</div>
</body>
</html>