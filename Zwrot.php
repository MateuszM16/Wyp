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
			<?php
				echo "Możesz zwrócić samochód: ";
				$sql = "select * from samochod where czy_wyporzy ='Tak'";
				$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					echo "<form action='Zwrot.php' method='post'>";
					echo "<select name='Lista'>";
					while($row = $result->fetch_assoc())
					{
						echo "<option value=",$row["ID"],">",$row["Marka"]." ".$row["Model"],"</option>";
					}
					echo "</select>";
					echo "</br>";
					echo "<input type='input' name='Ile_KM'/>Ile Przejechałeś km<br>";
					echo "<input type='submit' value='Zwróć'/>";
					echo "</form>";


				} else echo "Brak samochodów do Oddania";
			?>
			<br>

				
			
			<?php
				$id = $_POST["Lista"];
				$Ile_KM = $_POST["Ile_KM"];
				if( ($_POST["Lista"])!="" )
				{
					$sql = "UPDATE samochod SET Czy_wyporzy='Nie' where ID='$id'";
					if($conn->query($sql) === TRUE)
					{
						echo "Samochód został oddany";
					}
					else echo "Error: " . $sql . "<br>" . $conn->error;
				
				$loginn_uzy=$_SESSION["login"];
				$sql = "INSERT INTO ile_km (ID_uzytkownika,ilosc_km) Values ((Select id from uzytkownicy where login = '$loginn_uzy'),'$Ile_KM')";
				$conn->query($sql);
				
				}else echo "pola nie mogą być puste";
			?>
		</div>

		<div class="stopka">
		</div>
	</body>
</html>