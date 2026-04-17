<?php

$url="jojos.json";
$response=file_get_contents($url);
$jojos=json_decode($response,true);


foreach($jojos['stardust'] as $jojo){
    
    echo "<h2>".$jojo["stand"]."</h2>";
    echo "<h3>".$jojo["type"][0]."</h3>";
    echo "<h3>".$jojo["type"][1]."</h3>";
    echo "<h3>".$jojo["type"][2]."</h3>";
    echo "<img src='" . $jojo['stand_images'][0] . "'>";
    echo "<h3>".$jojo["user"]."</h3>";
    echo "<h3>".$jojo["gender"]."</h3>";
    echo "<h3>".$jojo["hair_color"]."</h3>";
    echo "<h3>".$jojo["eye_color"]."</h3>";
    echo "<img src='" . $jojo['user_images'][0] . "'>";


}




?>