<?php

$contact=  array(      
						
						'Prenom'=>'Babacar Matar',
					   'Nom'=>'Ndiaye',
					   'Tel'=>'777199685',
					   'Email'=>'abubamat11@gmail.com',
					   'N° Carte Etudiant'=>'201708DER',
					   'Profession'=>'Etudiant',
					   'Date de naissaance'=>'04 Novembre 1996',
						'Identifiant Slack' =>'Abubakar');

?>

<!DOCTYPE html>
	<html lang="fr">
	
		<head>
			<meta charset="UTF-8">
			<title>Identifacation</title>
		<style>
			table,tr,td,th{
				border: 2px solid black;
				padding : 15px;
				border-radius: 15px 15px 15px 15px;
				font-size: 35px;
				text-decoration-color: white;

			}
			body{
				background-color : gray;
			}
		</style>

=		</head>

		
		<body>
			<center style="padding-top: 10%;">
			
			<table>
				<th colspan="4"><a href="photo.jpg"><img src="photo.jpg" title="Cliquez pour agrandir" style="
    height: 200px;
    width: 170px;
    "/></a></th>
				<?php foreach ($contact as $key => $value): ?>
					<tr>
						<td><?php echo $key;?></td>
						<td><?php echo $value;?></td>	
					</tr>

				<?php endforeach ?>
			</table>
			</center>
		</body>
	
	</html>	

	