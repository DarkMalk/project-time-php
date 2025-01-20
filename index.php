<?php

$API_KEY = getenv('API_KEY');

$url = "https://weatherapi-com.p.rapidapi.com/current.json?q=Santiago%20CL";
$headers = [
  "x-rapidapi-key: $API_KEY",
  "x-rapidapi-host: weatherapi-com.p.rapidapi.com"
];
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);

$data = json_decode($response, true);

curl_close($curl);


$location = $data['location']['name'] . ', ' . $data['location']['country'];
$temperature = $data['current']['temp_c'];
$condition = [
  "text" => $data['current']['condition']['text'],
  "icon" => $data['current']['condition']['icon']
];
$humidity = $data['current']['humidity'];
$wind = $data['current']['wind_kph'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time with PHP</title>
  <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
  <main class="container">
    <section id="location"><?= $location ?></section>
    <section id="temperature"><?= $temperature ?>°C</section>
    <section id="condition">
      <img src="<?= $condition["icon"] ?>" alt="Icon <?= $condition["text"] ?>">
      <p><?= $condition["text"] ?></p>
    </section>
    <section id="details">
      <p>Wind: <?= $wind ?>km/h</p>
      <p>Humidity: <?= $humidity ?>%</p>
    </section>
  </main>
</body>

</html>