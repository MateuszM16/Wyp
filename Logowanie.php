<?php
	session_start();
	
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
			<br>
			<form action="Logowanie.php" method="POST">
				<input type="input" name="login"/> Login<br>
				<input type="password" name="haslo"/> Hasło<br>
				<input type="submit" value="Wyslij"/>
			</form>
			
		<?php
			$login = $_POST["login"];
			$haslo = $_POST["haslo"];
			
			if($login!="")
			{
				$sql="Select login, haslo from uzytkownicy where login = '$login' and haslo = md5('$haslo')";
				$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					echo "Zalogowano";
					$_SESSION["zalogowany"] = 1;
					$_SESSION["login"] = $login;
					header("Location: Wypozyczalnia.php");
				}
				else echo "Podano zły login lub hasło";
			}else echo "Pola nie mogą być puste";
		?>
		</div>

		<div class="stopka">
		</div>
	</body>
</html>