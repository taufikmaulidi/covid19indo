<?php

$url = "https://indonesia-covid-19.mathdro.id/api/provinsi";



$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);


$result = json_decode($response);
$Positif = $result->data[4]->kasusPosi;
$Meninggal = $result->data[4]->kasusMeni;
$Sembuh = $result->data[4]->kasusSemb;


?>

<!DOCTYPE html>
<html>
<head>
	<title> Live Data Corona Virus Di indonesia </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<p class="judul"> Data Jawa Tengah</p>

 
	<table align="center" border="0" cellspacing="0" style="color: #fff;">
		
		<th width="200" class="color1">
			<br>Kasus Positif
		</th>
		<th width="100">
		<th width="200"class="color1">
			<br>Sembuh
		</th>
		</th>
		<th width="100">
		<th width="200"class="color1">
			<br>Meninggal
		</th>
		<tr>
			<td class="emot" > &#129298</td>
			<td></td>
			<td class="emot" > &#128578</td>
			<td></td>
			<td class="emot" > &#128577</td>
		</tr>
		<tr>
			<td class="color2"> <?php echo $Positif ?><br><br></td>
			<td></td>
			<td class="color2"> <?php echo $Sembuh ?><br><br></td>
			<td></td>
			<td class="color2"> <?php echo $Meninggal ?><br><br></td>
		</tr>
	</table>
	<center>
	<a href="index.php"><button class="button"> Data Indonesia </button></a>
	</center>


</body>
</html>		