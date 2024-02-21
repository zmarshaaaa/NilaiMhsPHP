<?php

$mahasiswa = [
    "nama" => "marsha" ,
    "umur" => "20" , 
    "alamat" => "depok"
];

echo $mahasiswa["nama"];
foreach ($mahasiswa as $hehe){
    echo $hehe . "<br>";
}

$mahasiswa = [
    ["marsha", "sistem informasi"], 
    ["marsha", "sistem informasi"],
    ["marsha", "sistem informasi"],    
];
foreach ($mahasiswa as $kontol) {
    echo "nama :" . $kontol[0]. "<br>";
}