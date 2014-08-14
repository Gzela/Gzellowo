<?php include("config.php");
// (prawie) APRIORI
If (isset($_POST['done']))
{
	$sup = $_POST['supp'];

	include("redukcja.php");
	include("segregacja.php");
	
$j = mysql_query("SELECT * FROM zakupy ORDER BY Id DESC"); // Przypisanie ostatniego Id w bazie do zmiennej
$i = 1;
while ($i < $j)
	{
		// Wyciągnięcie danych z bazy 
		$r1 = mysql_query("SELECT z1 FROM zakupy WHERE Id ='$i' ");
		$r2 = mysql_query("SELECT z2 FROM zakupy WHERE Id ='$i' ");
		$r3 = mysql_query("SELECT z3 FROM zakupy WHERE Id ='$i' ");
		$r4 = mysql_query("SELECT z4 FROM zakupy WHERE Id ='$i' ");
		$r5 = mysql_query("SELECT z5 FROM zakupy WHERE Id ='$i' ");
		
		// Dalsza część wyciągania
		$z1 = mysql_fetch_array($r1);
		$z2 = mysql_fetch_array($r2);
		$z3 = mysql_fetch_array($r3);
		$z4 = mysql_fetch_array($r4);
		$z5 = mysql_fetch_array($r5);
		
		// Przypisanie danych do tymczasowych zmiennych
		$t1 = $z1['z1'];
		$t2 = $z2['z2'];
		$t3 = $z3['z3'];
		$t4 = $z4['z4'];
		$t5 = $z5['z5'];
		
	// Powiązania dwóch produktów
	If ((!empty($t1)) && (!empty($t2)))
			{
				$t12 = $t12 + 1;
			}	
		If ((!empty($t2)) && (!empty($t3)))
			{
				$t23 = $t23 + 1;
			}	
				If ((!empty($t3)) && (!empty($t4)))
				{
					$t34 = $t34 + 1;
				}	
					If ((!empty($t4)) && (!empty($t5)))
					{
						$t45 = $t45 + 1;
					}	
	If ((!empty($t1)) && (!empty($t3)))
	{
		$t13 = $t13 + 1;
	}	
		If ((!empty($t2)) && (!empty($t4)))
		{
			$t24 = $t24 + 1;
		}	
			If ((!empty($t3)) && (!empty($t5)))
			{
				$t35 = $t35 + 1;
			}			
	If ((!empty($t1)) && (!empty($t4)))
	{
		$t14 = $t14 + 1;
	}	
		If ((!empty($t2)) && (!empty($t5)))
		{
			$t25 = $t25 + 1;
		}	
	If ((!empty($t1)) && (!empty($t5)))
		{
			$t15 = $t15 + 1;
		}
			
	// Powiązania trzech produktów
	If ((!empty($t1)) && (!empty($t2)) && (!empty($t3)))
	{
		$t123 = $t123 + 1;
	}
		If ((!empty($t2)) && (!empty($t3)) && (!empty($t4)))
		{
			$t234 = $t234 + 1;
		}
			If ((!empty($t3)) && (!empty($t4)) && (!empty($t5)))
			{
				$t345 = $t345 + 1;
			}
	If ((!empty($t1)) && (!empty($t2)) && (!empty($t4)))
	{
		$t124 = $t124 + 1;
	}
		If ((!empty($t2)) && (!empty($t3)) && (!empty($t5)))
		{
			$t235 = $t235 + 1;
		}
	If ((!empty($t1)) && (!empty($t2)) && (!empty($t5)))
	{
		$t125 = $t125 + 1;
	}
		If ((!empty($t2)) && (!empty($t4)) && (!empty($t5)))
		{
			$t245 = $t245 + 1;
		}
	If ((!empty($t1)) && (!empty($t3)) && (!empty($t4)))
	{
		$t134 = $t134 + 1;
	}
	If ((!empty($t1)) && (!empty($t3)) && (!empty($t5)))
	{
		$t135 = $t135 + 1;
	}
	If ((!empty($t1)) && (!empty($t4)) && (!empty($t5)))
	{
		$t145 = $t145 + 1;
	}
	// Powiązania czterech produktów
	If ((!empty($t1)) && (!empty($t2)) && (!empty($t3)) && (!empty($t4)))
	{
		$t1234 = $t1234 + 1;
	}
	If ((!empty($t1)) && (!empty($t2)) && (!empty($t3)) && (!empty($t5)))
	{
		$t1234 = $t1234 + 1;
	}
	If ((!empty($t1)) && (!empty($t3)) && (!empty($t4)) && (!empty($t5)))
	{
		$t1345 = $t1345 + 1;
	}
		If ((!empty($t2)) && (!empty($t3)) && (!empty($t4)) && (!empty($t5)))
		{
			$t2345 = $t2345 + 1;
		}
	// Powiązania pięciu produktów
	If ((!empty($t1)) && (!empty($t2)) && (!empty($t3)) && (!empty($t4)) && (!empty($t5)))
	{
		$t12345 = $t12345 + 1;
	}
	$i++;
	}
	// Wynik
		
	echo '<center>';
		If ($t12 >= $sup)
	{
		echo 'Chleb i mleko występują razem '.$t12.' razy<br>';
	}
		If ($t13 >= $sup)
	{
		echo 'Chleb i jajka występują razem '.$t13.' razy<br>';
	}
		If ($t14 >= $sup)
	{
		echo 'Chleb i ser występują razem '.$t14.' razy<br>';
	}
		If ($t15 >= $sup)
	{
		echo 'Chleb i kurczak występują razem '.$t15.' razy<br>';
	}
		If ($t23 >= $sup)
	{
		echo 'Mleko i jajka występują razem '.$t23.' razy<br>';
	}
		If ($t24 >= $sup)
	{
		echo 'Mleko i ser występują razem '.$t24.' razy<br>';
	}
		If ($t25 >= $sup)
	{
		echo 'Mleko i kurczak występują razem '.$t25.' razy<br>';
	}
		If ($t34 >= $sup)
	{
		echo 'Jajka i ser występują razem '.$t34.' razy<br>';
	}
		If ($t35 >= $sup)
	{
		echo 'Jajka i kurczak występują razem '.$t35.' razy<br>';
	}
		If ($t45 >= $sup)
	{
		echo 'Ser i kurczak występują razem '.$t45.' razy<br>';
	}
		If ($t123 >= $sup)
	{
		echo 'Chleb, mleko i jajka występują razem '.$t123.' razy<br>';
	}
		If ($t124 >= $sup)
	{
		echo 'Chleb, mleko i ser występują razem '.$t124.' razy<br>';
	}
		If ($t125 >= $sup)
	{
		echo 'Chleb, mleko i kurczak występują razem '.$t125.' razy<br>';
	}
		If ($t234 >= $sup)
	{
		echo 'Mleko, jajka i ser występują razem '.$t234.' razy<br>';
	}
		If ($t235 >= $sup)
	{
		echo 'Mleko, jajka i kurczak występują razem '.$t235.' razy<br>';
	}
		If ($t345 >= $sup)
	{
		echo 'Jajka, ser i kurczak występują razem '.$t345.' razy<br>';
	}
		If ($t1234 >= $sup)
	{
		echo 'Chleb, mleko, jajka i ser występują razem '.$t1234.' razy<br>';
	}
		If ($t1235 >= $sup)
	{
		echo 'Chleb, mleko, jajka i kurczak występują razem '.$t1235.' razy<br>';
	}
		If ($t1245 >= $sup)
	{
		echo 'Chleb, mleko, ser i kurczak występują razem '.$t1245.' razy<br>';
	}
		If ($t1345 >= $sup)
	{
		echo 'Chleb, jajka, ser i kurczak występują razem '.$t1345.' razy<br>';
	}
		If ($t2345 >= $sup)
	{
		echo 'Mleko, jajka, ser i kurczak występują razem '.$t2345.' razy<br>';
	}
		If ($t12345 >= $sup)
	{
		echo 'Chleb, mleko, jajka, ser i kurczak występują razem '.$t12345.' razy<br>';
	}
		If ($t134 >= $sup)
	{
		echo 'Chleb, jajka i ser występują razem '.$t134.' razy<br>';
	}
		If ($t135 >= $sup)
	{
		echo 'Chleb, jajka i kurczak występują razem '.$t135.' razy<br>';
	}
		If ($t145 >= $sup)
	{
		echo 'Chleb, ser i kurczak występują razem '.$t145.' razy<br>';
	}
	
}
?>
<b><center><br>Witaj w algorytmie apriori (powiedzmy)<br></b><br>
<form method="POST">
Podaj minimalne wsparcie (support)<br><br>
<input type="text" name="supp"><br><br>
<input type="submit" name="done" value="Szukaj">