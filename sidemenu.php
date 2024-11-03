<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>    
    <link rel="stylesheet" href="style.css">
    <title>Admin Landing Page</title>
</head>
<body>
    <section id="sidebar">
		<!--LOGO DIV-->
        <div class="container">
		<a href="#" class="LOGO"> 
			<img src="images/LOGO.png" class="image">
		</a>
        </div>
		<!--SIDE MENU-->
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Residents List</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-calendar'></i>
					<span class="text">Calendar</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-megaphone' ></i>
					<span class="text">Annoucemets</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!--JAVASCRIPT-->
	<script src="script.js"></script>
</body>

</html>

