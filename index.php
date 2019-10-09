<?php
	session_start();
	if ($_SESSION['zalogowany'] == 0)
	{
		header("Location: Logowanie.php");
	}

	else 
	{
		header("Location: Wypozyczalnia.php");
	}
?>

<html>
	<head>    

		<?php
			error_reporting(0);
		?>
		
		<link rel="Stylesheet" href="style.css">
	</head>
	<body>
		<div class="naglowek">
			<?php
				include('polaczenie.php');
			?>
		</div>

		<div class="menu">
			<?php
				include('menu.php');
			?>

		</div>
		<div class="body">

		</div>

		<div class="stopka">
		</div>

	</body>
</html>