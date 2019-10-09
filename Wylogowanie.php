<?php
	session_start();
	if ($_SESSION['zalogowany'] == 0)
	{
		header("Location: Logowanie.php");
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
			<h3>Wylogowano</h3>
			
			<?php
				$_SESSION["zalogowany"] = 0;
				header("Location: Rejestracja.php");
			?>
		</div>

		<div class="stopka">
		</div>

	</body>
</html>