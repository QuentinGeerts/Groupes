<?php

for ($nombre = 1; $nombre < 10; $nombre++) {
    echo 'Ceci est la ligne n°' . $nombre . "<br>";
}

echo "------------<br>";

$nombre = 1;
while ($nombre < 10) {
    echo 'Ceci est la ligne n°' . $nombre . "<br>";
    $nombre++;
}

echo "------------<br>";

$nombre = 1;
do {
    echo 'Ceci est la ligne n°' . $nombre . "<br>";
    $nombre++;
} while ($nombre < 10);