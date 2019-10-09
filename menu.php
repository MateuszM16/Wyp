<?php

if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1)
{
	echo "<div class='guzik'>";
	echo "<a href='Wylogowanie.php'>Wylogowanie</a>";
	echo "</div>";
	echo "<div class='guzik'>";
	echo "<a href='Wypozyczalnia.php'>Wypozyczalnia</a>";
	echo "</div>";
	echo "<div class='guzik'>";
	echo "<a href='Zwrot.php'>Zwrot</a>";
	echo "</div>";
}
else{
	echo "<div class='guzik'>";
	echo "<a href='Rejestracja.php'>Rejestracja</a>";
	echo "</div>";
	echo "<div class='guzik'>";
	echo "<a href='Logowanie.php'>Logowanie</a>";
	echo "</div>";
}
?>