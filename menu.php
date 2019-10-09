<?php

if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1)
{
	echo "<a href='Wylogowanie.php'><div class='guzik'>Wylogowanie</div></a>";
	echo "<a href='Wypozyczalnia.php'><div class='guzik'>Wypozyczalnia</div></a>";
	echo "<a href='Zwrot.php'><div class='guzik'>Zwrot</div></a>";
}
else{
	echo "<a href='Rejestracja.php'><div class='guzik'>Rejestracja</div></a>";
	echo "<a href='Logowanie.php'><div class='guzik'>Logowanie</div></a>";
}
?>