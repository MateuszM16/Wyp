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
				echo "Dostępne samochody: ";
				$sql = "select * from samochod where czy_wyporzy ='Nie'";
				$result = $conn->query($sql);
				
				if($result->num_rows > 0)
				{
					echo "<form action='Wypozyczalnia.php' method='POST'>";
					echo "<select name='Lista'>";
					while($row = $result->fetch_assoc())
					{
						echo "<option value=",$row["ID"],">",$row["Marka"]." ".$row["Model"],"</option>";
					}
					echo "</select>";
								
					echo "<br><br>";
					echo "<input type='submit' value='Wyporzycz'/>";
					echo "</form>";

				} else echo "Brak samochodów do wypożyczenia</BR>";
			?>

				
			<?php

				$loginn_uzy=$_SESSION["login"];
				$sql = "SELECT SUM(ilosc_km) as km FROM ile_km WHERE ID_uzytkownika = (Select id from uzytkownicy where login = '$loginn_uzy')";
				$result = $conn->query($sql);

				
				
				if($result->num_rows > 0)
				{
					$row = $result->fetch_assoc();
					$x = 15000 - $row["km"];
					if($row["km"]>15000) { echo "Przejechałeś ponad 15 tys km, dostajesz zniżke 15%"; }
					else { echo "Aby dostać zniżke barkuje ci jeszcze: ".$x. " tys km"; }
					
				} 

				else
				{
					echo "Aby dostać zniżke barkuje ci jeszcze 15 tys km";
				}


				$ID = $_POST["Lista"];
				if( ($_POST["Lista"])!="" ){
				$sql = "UPDATE samochod SET Czy_wyporzy='Tak' where $ID = ID";
				if($conn->query($sql) == TRUE)
				{
					echo "Samochód został wypożyczony";
				}
				else echo "Error: " . $sql . "<br>" . $conn->error;

				$id = "";
				} else "Pole nie może być puste";
			?>
			
		</div>

		<div class="stopka">
		</div>

	</body>
</html>