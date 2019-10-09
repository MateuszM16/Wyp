<html>
	<head>    
	
		<?php
			error_reporting(0);
		?>
		
		<link rel="Stylesheet" href="style.css">
		
	</head>
	<body>
		<div class="naglowek">
		Wyporzyczalnia samochodów!
			
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
			<form action="Rejestracja.php" method="POST">
				<input type="input" name="login"/> Login<br>
				<input type="password" name="haslo"/> Hasło<br>
				<input type="password" name="haslo2"/> Hasło<br>
				<input type="email" name="email"/> Email<br>
				<input type ="submit" value="Rejestracja">
			</form>
			
			<?php
				$login = $_POST["login"];
				$haslo = $_POST["haslo"];
				$haslo2 = $_POST["haslo2"];
				$email = $_POST["email"];

			if($haslo==$haslo2)
			{
				$sql="Select * from uzytkownicy where login = '$login'";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0)
				{
					echo "Taki login jest już zajęty, wybierz inny";
				}
				else 
				{
					$sql="Insert into uzytkownicy (login,haslo,email) values('$login', md5('$haslo'), '$email')";
					$result = $conn->query($sql);
					echo "Rejestracja zakończona pomyślnie";
				}
			}
			else echo "Hasła muszą być takie same";
				
			?>

		</div>

		<div class="stopka">
		</div>

	</body>
</html>