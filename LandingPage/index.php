<?php
	session_start();
	include "database.php";
	if(isset($_POST["submit"])) 
	{
		$sql = "INSERT INTO travel(Name, Mail, Dest, Start, End) 
				VALUES ('{$_POST["Name"]}', '{$_POST["Email-Id"]}', '{$_POST["Place"]}', '{$_POST["trip_start"]}', '{$_POST["trip_end"]}')";
		$conn->query($sql);
		$_SESSION['msg'] = "Booked Successfully";
		header("Location: " . $_SERVER['PHP_SELF']);
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
	<header>
		<img src="images/kerala-logo.JPG" alt="Kerala Logo" class="logo">
		<h1>Explore Kerala - By Road, River, Nature & Soul</h1>
		<p>Entae Keralam - Where Beauty Meets Soul !!</p>
		<nav>
			<a href="alogin.php">Admin Login</a>
		</nav>
	</header>
	<section class="about">
		<h2>About Kerala</h2>
		<p>Kerala, known as God's Own Country, is a scenic state on India's South-West Coast with it's Backwaters, Beaches, Hill-Stations and Traditions. It offers a perfect 
		mix of Nature, Culture and Wellness. A popular destination for both Peace and Exploration.</p>
	</section>
	<section class="places">
		<h2>Scenic Wonder of the South</h2>
		<p><h4>Land of Backwaters, Beaches and Bliss</h4></p>
		<div class="cards">
			<div class="card">
				<img src="images/thiruvananthapuram.jpeg" alt="Thiruvananthapuram">
				<h3><a href="thiruvananthapuram.php">Thiruvananthapuram</a></h3>
				<p>Kerala's capital city known for Famous Temples, Calm Beaches and a Cultural Heritage</p>
			</div>
			<div class="card">
				<img src="images/kollam.jpeg" alt="Kollam">
				<h3><a href="kollam.php">Kollam</a></h3>
				<p>A peaceful coastal town with beautiful backwaters, lakes, and a rich trading history</p>
			</div>
			<div class="card">
				<img src="images/alappuzha.jpeg" alt="Alappuzha">
				<h3><a href="alappuzha.php">Alappuzha</a></h3>
				<p>Famous for its backwater cruises, houseboats, and green paddy fields</p>
			</div>
			<div class="card">
				<img src="images/kochi.jpeg" alt="Kochi">
				<h3><a href="kochi.php">Kochi</a></h3>
				<p>A lively city that mixes old-world charm with modern life, known for its ports, art, and colonial buildings</p>
			</div>
			<div class="card">
				<img src="images/munnar.jpeg" alt="Munnar">
				<h3><a href="munnar.php">Munnar</a></h3>
				<p>A cool hill district full of tea gardens, waterfalls, and scenic mountain views</p>
			</div>
			<div class="card">
				<img src="images/wayanad.jpeg" alt="Wayanad">
				<h3><a href="wayanad.php">Wayanad</a></h3>
				<p>A quiet, green district with forests, wildlife, waterfalls, and ancient caves perfect for nature lovers</p>
			</div>
		</div>
	</section>
	<section class="form-section">
		<h2>Request Travel Info</h2>
		<?php
			if (isset($_SESSION['msg'])) 
			{
				echo "<script>alert('{$_SESSION['msg']}');</script>";
				unset($_SESSION['msg']);
			}
		?>

		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
			<label>Name</label>
			<input type="text" name="Name" required>
			<label>Mail-Id</label>
			<input type="email" name="Email-Id" required>
			<label>Select Place to Visit</label>
			<select name="Place" required>
				<option value="Select Your Destination">Select Your Destination</option>
				<option value="thiruvananthapuram">Thiruvananthapuram</option>
				<option value="kollam">Kollam</option>
				<option value="alappuzha">Alappuzha</option>
				<option value="kochi">Kochi</option>
				<option value="munnar">Munnar</option>
				<option value="wayanad">Wayanad</option>
			</select>
			<label>Trip Start Date:</label>
			<input type="date" name="trip_start" required>
			<label>Trip End Date:</label>
			<input type="date" name="trip_end" required>
			<button type="submit" name="submit">Book</button>
		</form>					
	</section>
	<footer>
		<p>&copy; 2025 Kerala Tourism. All rights reserved.</p>
	</footer>
</body>
</html>