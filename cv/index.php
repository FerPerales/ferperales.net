<?php

$hit_count = @file_get_contents('count.txt');
$hit_count++;
@file_put_contents('count.txt', $hit_count);

header('Location: http://www.ferperales.net/docs/CV Fernando Perales_en.pdf'); // redirect to the real file to be downloaded
?>