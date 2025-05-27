<?php

$data = file_get_contents(__DIR__ . '/coba.json');
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);
echo $mahasiswa[0]["pembimbing"]["pembimbing1"];

?>