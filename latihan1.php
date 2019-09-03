<?php
$arrNilai =Array ("Ajeng" => 90, "Mamat" => 70, "Ucup" => 78,
"Aang" => 95,"Syahrul" => 75);
echo "<pre>";
print_r ($arrNilai);
echo "<br>";
echo "</pre>";
foreach ($arrNilai as $nama => $nilai) {
    if ($nilai > 85) {
        echo "Nama = $nama, Nilai = $nilai, Grade A<hr>";
    }
    elseif ($nilai > 75) {
        echo "Nama = $nama, Nilai = $nilai, Grade B<hr>";
    }
    elseif ($nilai > 65) {
        echo "Nama = $nama, Nilai = $nilai, Grade C<hr>";
    }
    
}

?>