<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		echo "<h1>"."Exo 1"."</h1>";

			function test()
						{
							return true;
						}			
			echo test();



		echo "<h1>"."Exo 2"."</h1>";

			function afficheString($value='tralalilalaAAAAAAA!')
						{
							echo "<p>".$value."</p>";
						}		

			afficheString();	



		echo "<h1>"."Exo 3"."</h1>";

			function concat2Strings($value1, $value2)
				{
					echo "<p>".$value1.$value2."</p>";
				}

			concat2Strings('VIVAAAAAA', ' Las VegAAAAAAAAS');
		


		echo "<h1>"."Exo 4"."</h1>";

			function compare_2_nombres ($value1, $value2)
			{
				if ($value1 < $value2){
					echo "<p>"."Le premier nombre est plus petit"."</p>"; 
				} elseif ($value1 > $value2) {
					echo "<p>"."Le premier nombre est plus grand"."</p>"; 
				} else
					echo "<p>"."Les deux nombres sont identiques"."</p>"; 
			}

			echo "<p>"."test de fonction avec 2 et 40"."</p>";
			compare_2_nombres(2, 40);
			compare_2_nombres(56, 40);
			compare_2_nombres(2, 2);


		echo "<h1>"."Exo 5"."</h1>";
		
			function concat_nbr_str($nbr, $str)
			{
				echo "<p>".$nbr.$str."</p>";
			}

			concat_nbr_str(6, " el Diablo");



		echo "<h1>"."Exo 6"."</h1>";

			function ecritString($nom, $prenom, $age)
			{
				echo "<p>"."Bonjour ".$nom." ".$prenom.", tu as ".$age." ans."."</p>";
			}
			
			echo "<p>"."test de fonction avec ROBERT Damien, 33 ans"."</p>";
			ecritString("ROBERT", "Damien", 33 );


		echo "<h1>"."Exo 7"."</h1>";

			function genre_et_majorité ($age, $genre)
			{
				$genreS = array('homme', 'femme');

				if ($genre == $genreS[0]){
					if ($age < 18){
						echo "<p>"."Vous êtes un ".$genre." et vous êtes mineur"."</p>";
					} else {
						echo "<p>"."Vous êtes un ".$genre." et vous êtes majeur"."</p>";
					}
				} else {
					if ($age < 18){
						echo "<p>"."Vous êtes une ".$genre." et vous êtes mineure"."</p>";
					} else {
						echo "<p>"."Vous êtes une ".$genre." et vous êtes majeure"."</p>";
					}
				}
			}
		
			echo "<p>"."test de fonction avec homme 33 ans, homme 12 ans, femme 50 ans, femme 3 ans "."</p>";

			genre_et_majorité(33, 'homme');
			genre_et_majorité(12, 'homme');
			genre_et_majorité(50, 'femme');
			genre_et_majorité(3, 'femme');



		echo "<h1>"."Exo 8"."</h1>";

			$val1 = 0;
			$val2 = 0;
			$val3 = 0;

			function addition($val1, $val2, $val3)
			{
				$resultat = $val1+$val2+$val3;
				echo "<p>".$resultat."</p>";
			}

			echo "<p>"."test de fonction addition avec 1, 2 et 3, puis valeurs initiales (0)"."</p>";

			addition(1, 2, 3);
			addition($val1, $val2, $val3);



	?>
</body>
</html>