<?php include("config.php");
// REDUKCJA
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
		
		// Przypisanie zmiennych tymczasowych
		$z1 = mysql_fetch_array($r1);
		$z2 = mysql_fetch_array($r2);
		$z3 = mysql_fetch_array($r3);
		$z4 = mysql_fetch_array($r4);
		$z5 = mysql_fetch_array($r5);
		
		// Redukcja
		
			If ($z1['z1']==$z2['z2'])
		{
			mysql_query("UPDATE Zakupy SET z2='' WHERE Id='$i'");
			
			If ($z1['z1']==$z3['z3']) 
			{
				mysql_query("UPDATE Zakupy SET z3='' WHERE Id='$i'");
				
				If ($z1['z1']==$z4['z4'])
				{
					mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
					
					If ($z1['z1']==$z5['z5'])
					{
						mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
						
						If ($z3['z3']==$z4['z4'])
						{
							mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
							
							If ($z3['z3']==$z5['z5'])
							{
								mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
								
								If ($z4['z5']==$z5['z5'])
								{
									mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
								}
							}
						}
					}
				}
			}
		}
		If ($z1['z1']==$z3['z3'])
		{
			mysql_query("UPDATE Zakupy SET z3='' WHERE Id='$i'");
			
			If ($z1['z1']==$z4['z4'])
			{
				mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
				
				If ($z1['z1']==$z5['z5'])
				{
					mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
					
					If ($z2['z2']==$z4['z4'])
					{
						mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
						
						If ($z2['z2']==$z5['z5'])
						{
							mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
							
							If ($z4['z4']==$z5['z5'])
							{
								mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
							}
						}
					}
						
				}
			}
		}
		If ($z1['z1']==$z4['z4'])
		{
			mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
			
			If ($z1['z1']==$z5['z5'])
			{
				mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
				
				If ($z2['z2']==$z3['z3'])
				{
					mysql_query("UPDATE Zakupy SET z3='' WHERE Id='$i'");
					
					If ($z2['z2']==$z5['z5'])
					{
						mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
						
						If ($z3['z3']==$z5['z5'])
						{
							mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
						}
					}
				}
			}
		}
		If ($z1['z1']==$z5['z5'])
		{
			mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
		}
		If ($z2['z2']==$z3['z3'])
		{
			mysql_query("UPDATE Zakupy SET z3='' WHERE Id='$i'");
			
			If ($z2['z2']==$z4['z4']) 
			{
				mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
				
				If ($z2['z2']==$z5['z5'])
				{
					mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
					
					If ($z3['z3']==$z4['z4'])
					{
						mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
						
						If ($z3['z3']==$z5['z5'])
						{
							mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
							
							If ($z4['z4']==$z5['z5'])
							{
								mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
								
							}
						}
					}
				}
			}
		}
		If ($z2['z2']==$z4['z4'])
		{
			mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
			
			If ($z2['z2']==$z5['z5']) 
			{
				mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
				
				If ($z3['z3']==$z4['z4'])
				{
					mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
					
					If ($z3['z3']==$z5['z5'])
					{
						mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
						
					}
				}
			}
		}
		If ($z2['z2']==$z5['z5'])
		{
			mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
			
			If ($z3['z3']==$z4['z4']) 
			{
				mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
				
				If ($z3['z3']==$z5['z5'])
				{
					mysql_query("UPDATE Zakupy SET z6='' WHERE Id='$i'");
					
				}
			}
		}
		If ($z3['z3']==$z4['z4'])
		{
			mysql_query("UPDATE Zakupy SET z4='' WHERE Id='$i'");
			
			If ($z3['z3']==$z5['z5']) 
			{
				mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
				
				If ($z4['z4']==$z5['z5'])
				{
					mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
					
				}
			}
		}
		If ($z3['z3']==$z5['z5']) 
		{
			mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
				
			If ($z4['z4']==$z5['z5'])
			{
					mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
					
			}
		}
		If ($z4['z4']==$z5['z5'])
		{
			mysql_query("UPDATE Zakupy SET z5='' WHERE Id='$i'");
		}
	$i++;
	}
?>
	
		