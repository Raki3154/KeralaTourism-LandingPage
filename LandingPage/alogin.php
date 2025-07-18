<?php
	session_start();
	include "database.php";
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
		</header>
		<div class="main">
			<div class="admin-box">
				<h3>Admin Login</h3>
				<?php
					if (isset($_POST["submit"])) 
					{
						$sql = "SELECT * FROM admin WHERE AName='{$_POST["aname"]}' AND APass='{$_POST["apass"]}'";
						$res = $conn->query($sql);
						if ($res->num_rows > 0) 
						{
							$row = $res->fetch_assoc();
							$_SESSION["AId"] = $row["AId"];
							$_SESSION["AName"] = $row["AName"];
							header("location: ahome.php");
							exit();
						} 
						else
						{
							echo "<p class='error'>Invalid User Details</p>";
						}
					}
				?>
				<form action="alogin.php" method="post">
					<label>Name</label>
					<input type="text" name="aname" required>
					<label>Password</label>
					<input type="password" name="apass" required>
					<button type="submit" name="submit">Login Now</button>
				</form>
			</div>
		</div>
		<footer>
			<p>&copy; 2025 Kerala Tourism. All rights reserved.</p>
		</footer>
	</div>
</body>
</html>