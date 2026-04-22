<?php

$url="jojos.json";
$response=file_get_contents($url);
$jojos=json_decode($response,true);

echo "<h1>Jojo's Bizarre Adventure</h1>";
echo "<link rel='stylesheet' href='style.css'>";

echo"<div class='container'>";
foreach($jojos['stardust'] as $jojo){
 echo "<div class='jojo'>";

echo "<img src='" . $jojo['stand_images'][0] . "'>";

echo "<div class='jojo-content'>";
echo "<h2>".$jojo["stand"]."</h2>";

echo "<h3><strong>Usuário:</strong> ".$jojo["user"]."</h3>";
echo "<h3>Gênero: ".$jojo["gender"]."</h3>";
echo "<h3>Cabelo: ".$jojo["hair_color"]."</h3>";
echo "<h3>Olhos: ".$jojo["eye_color"]."</h3>";

echo "</div>";

echo "</div>";
}

echo"</div>";


?>