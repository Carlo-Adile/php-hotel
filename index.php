<?php
/* 
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile. Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
*/

// sito dell'array
$url = 'https://www.codepile.net/pile/OEWY7Q1G';
$data = file_get_contents($url);
// trasforma i dati json in array php
$hotels = json_decode($data, true);

foreach($hotels as $hotelData){
  foreach($hotelData as $hotel){
    echo $hotel;
  };
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>
</head>
<body>
  
</body>
</html>