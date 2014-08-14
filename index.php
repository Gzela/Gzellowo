<?php include("config.php");

	if (isset($_POST['check'])) 
	{
		// Przypisanie wybranych produktów pod zmienne
		$w1=$_POST['w1']; $w2=$_POST['w2']; $w3=$_POST['w3']; $w4=$_POST['w4']; $w5=$_POST['w5'];
		
		if ((empty($w1)) && (empty($w2)) && (empty($w3)) && (empty($w4)) && (empty($w5)))
		{
		
		echo '<span style="color:red"><center>Musisz wybrać co najmniej jeden produkt</center></span><br><br>';
		}
		else
		{	
		// Wprowadzenie wybranych zmiennych do bazy
		mysql_query("INSERT INTO zakupy (z1, z2, z3, z4, z5) VALUES ('$w1','$w2','$w3','$w4','$w5')");
		mysql_close();		
		echo '<center><span style="color:green">Zrobione<span></center><br>';
		echo '<center><a href="apriori.php"> Przejdź do apriori </a></center>';
		}
	}
?>
<b><center><br>Witaj w generatorze zakupów v.0.3.14159265359<br></b><br>
<form method="POST">
<select name="w1" >
	<option value="">Wybierz pierwszy produkt</option>
	<option value="i1">Chleb</option>
	<option value="i2">Mleko</option>
	<option value="i3">Jajka</option>
	<option value="i4">Ser</option>
	<option value="i5">Kurczak</option>
</select><br><br>
<select name="w2" >
	<option value="">Wybierz drugi produkt</option>
	<option value="i1">Chleb</option>
	<option value="i2">Mleko</option>
	<option value="i3">Jajka</option>
	<option value="i4">Ser</option>
	<option value="i5">Kurczak</option>
</select><br><br>
<select name="w3" >
	<option value="">Wybierz trzeci produkt</option>
	<option value="i1">Chleb</option>
	<option value="i2">Mleko</option>
	<option value="i3">Jajka</option>
	<option value="i4">Ser</option>
	<option value="i5">Kurczak</option>
</select><br><br>
<select name="w4" >
	<option value="">Wybierz czwarty produkt</option>
	<option value="i1">Chleb</option>
	<option value="i2">Mleko</option>
	<option value="i3">Jajka</option>
	<option value="i4">Ser</option>
	<option value="i5">Kurczak</option>
</select><br><br>
<select name="w5" >
	<option value="">Wybierz piąty produkt</option>
	<option value="i1">Chleb</option>
	<option value="i2">Mleko</option>
	<option value="i3">Jajka</option>
	<option value="i4">Ser</option>
	<option value="i5">Kurczak</option>
</select><br><br>
<input type="submit" name="check" value="Stwórz koszyk">
</form> 
