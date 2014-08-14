<?php include("config.php");
// SEGREGACJA
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
		
		// Wyczyszczenie danych z bazy, żeby nie pojawiały się duplikaty
		mysql_query("UPDATE Zakupy SET z1='' WHERE Id='$i'");
		mysql_query("UPDATE Zakupy SET z2='' WHERE Id='$i'");
		mysql_query("UPDATE Zakupy SET z3='' WHERE Id='$i'");
		mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
		mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
		
		// Segregowanie danych w bazie przy pomocy zmiennych tymczasowych
		If ($t1=='i1')
		{
			mysql_query("UPDATE Zakupy SET z1='i1' WHERE Id='$i'");
		}
			If ($t1=='i2')
			{
				mysql_query("UPDATE Zakupy SET z2='i2' WHERE Id='$i'");
			}
				If ($t1=='i3')
				{
					mysql_query("UPDATE Zakupy SET z3='i3' WHERE Id='$i'");
				}
					If ($t1=='i4')
					{
						mysql_query("UPDATE Zakupy SET z4='i4' WHERE Id='$i'");
					}
						If ($t1=='i5')
						{
							mysql_query("UPDATE Zakupy SET z5='i5' WHERE Id='$i'");
						}
		If ($t2=='i1')
		{
			mysql_query("UPDATE Zakupy SET z1='i1' WHERE Id='$i'");
		}
			If ($t2=='i2')
			{
				mysql_query("UPDATE Zakupy SET z2='i2' WHERE Id='$i'");
			}
				If ($t2=='i3')
				{
					mysql_query("UPDATE Zakupy SET z3='i3' WHERE Id='$i'");
				}
					If ($t2=='i4')
					{
						mysql_query("UPDATE Zakupy SET z4='i4' WHERE Id='$i'");
					}
						If ($t2=='i5')
						{
							mysql_query("UPDATE Zakupy SET z5='i5' WHERE Id='$i'");
						}
		If ($t3=='i1')
		{
			mysql_query("UPDATE Zakupy SET z1='i1' WHERE Id='$i'");
		}
			If ($t3=='i2')
			{
				mysql_query("UPDATE Zakupy SET z2='i2' WHERE Id='$i'");
			}
				If ($t3=='i3')
				{
					mysql_query("UPDATE Zakupy SET z3='i3' WHERE Id='$i'");
				}
					If ($t3=='i4')
					{
						mysql_query("UPDATE Zakupy SET z4='i4' WHERE Id='$i'");
					}
						If ($t3=='i5')
						{
							mysql_query("UPDATE Zakupy SET z5='i5' WHERE Id='$i'");
						}
		If ($t4=='i1')
		{
			mysql_query("UPDATE Zakupy SET z1='i1' WHERE Id='$i'");
		}
			If ($t4=='i2')
			{
				mysql_query("UPDATE Zakupy SET z2='i2' WHERE Id='$i'");
			}
				If ($t4=='i3')
				{
					mysql_query("UPDATE Zakupy SET z3='i3' WHERE Id='$i'");
				}
					If ($t4=='i4')
					{
						mysql_query("UPDATE Zakupy SET z4='i4' WHERE Id='$i'");
					}
						If ($t4=='i5')
						{
							mysql_query("UPDATE Zakupy SET z5='i5' WHERE Id='$i'");
						}
		If ($t5=='i1')
		{
			mysql_query("UPDATE Zakupy SET z1='i1' WHERE Id='$i'");
		}
			If ($t5=='i2')
			{
				mysql_query("UPDATE Zakupy SET z2='i2' WHERE Id='$i'");
			}
				If ($t5=='i3')
				{
					mysql_query("UPDATE Zakupy SET z3='i3' WHERE Id='$i'");
				}
					If ($t5=='i4')
					{
						mysql_query("UPDATE Zakupy SET z4='i4' WHERE Id='$i'");
					}
						If ($t5=='i5')
						{
							mysql_query("UPDATE Zakupy SET z5='i5' WHERE Id='$i'");
						}
	$i++;		
	}
		

		
?>