<?php
$array = array ('saya <br>', 10);
$aso = [
    [
    'Nama' => 'Andrian Ramdani',
    'Kelas' => 'RPL 11',
    ],
    [
    'Nama' => 'Andrianr Ramdani',
    'Kelas' => 'RPL 12',
    ]
];

foreach ($aso as $value) {
    echo $value ["Nama"] ."<br>";
    echo $value ["Kelas"] . "<br>";
}

echo "<hr>";
$countaso = count($aso);
for ($i=0; $i < $countaso ; $i++) { 
    echo $aso[$i]["Nama"] . "<br>";
    echo $aso[$i]["Kelas"] . "<br>";
}
?>