<?php

// $mahasiswa = [
//     [
//         "nama" => "Raden Ariffudin Rachman",
//         "nrp" => "173040010",
//         "email" => "raden@mail.unpas.ac.id"
//     ],
//     [ 
//         "nama" => "Raden Ariffudin Rachman",
//         "nrp" => "173040010",
//         "email" => "raden@mail.unpas.ac.id"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=tugas3.phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>