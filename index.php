<?php
/* 
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile. Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
*/

// sito dell'array
/* $url = 'https://www.codepile.net/pile/OEWY7Q1G';
$data = file_get_contents($url); */
// trasforma i dati json in array php
/* $hotels = json_decode($data, true);

exit (var_dump($data)); */

$hotels = [

  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ],

];

foreach($hotels as $hotelArray){
  foreach($hotelArray as $key => $hotel){
    echo $hotelArray[$key] .'<br>';
  };
}; 

echo '<hr>';

foreach($hotels as $key => $hotel){
  echo "$key: {$hotel['name']} <br>";
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