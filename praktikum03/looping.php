<?php

echo "<div style='background-color: lightgreen; padding: 10px;'>";

for ($i = 1; $i <= 10; $i++) {
    echo "<h1><span style='color: green;'>$i</span></h1>";
}

$buah = ["mangga", "jeruk", "semangka"];


foreach ($buah as $b) {
    echo "<h1>{$b}</h1>";
}

?>