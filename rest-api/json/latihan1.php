<?php

// $mahasiswa = [
//     [
//         "nama" => "Fitratul Aini",
//         "nim" => "2217020008",
//         "email" => "fitratul@gmail.com"
//     ],
//     [
//         "nama" => "aini",
//         "nim" => "22170200008",
//         "email" => "aini@gmail.com"
//     ]
// ];

//
$dbh = new PDO ('mysql:host=localhost;dbname=db_mahasiswa','root',''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll (PDO::FETCH_ASSOC); 


$data = json_encode($mahasiswa, JSON_PRETTY_PRINT);
echo $data;



?>
