<?php

$url = "https://api.kawalcorona.com/indonesia/";

$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);

$result = json_decode($response);
$Positif = $result[0]->positif;
$Meninggal = $result[0]->meninggal;
$Dirawat = $result[0]->dirawat;
$Sembuh = $result[0]->sembuh;

?>


<tr>
			<td colspan="4" align="center"> Sumber Data : <a class="contoh-link" target="_blank" href="www.kawalcorona.com" >kawalcorona.com </td>