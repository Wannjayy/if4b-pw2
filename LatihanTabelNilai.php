<?php
//data tabel
$nilais = [
    ["no" => 1,
    "mata_kuliah" => "Algoritma dan Struktur Data I",
    "kode_mk" => "I1206",
    "hm" => "B+",
    "am" => 3.30,
    "k" => 3,
    "m" => 9.9,],

    ["no" => 2,
    "mata_kuliah" => "Algoritma dan Struktur Data II",
    "kode_mk" => "IF0017",
    "hm" => "B+",
    "am" => 3.30,
    "k" => 3,
    "m" => 9.9,],

    ["no" => 3,
    "mata_kuliah" => "Logika Informatika",
    "kode_mk" => "I1108",
    "hm" => "B+",
    "am" => 3.30,
    "k" => 2,
    "m" => 6.6,],

    ["no" => 4,
    "mata_kuliah" => "Pemrograman Web I",
    "kode_mk" => "IF0012",
    "hm" => "A",
    "am" => 4.00,
    "k" => 3,
    "m" => 12,],

    ["no" => 5,
    "mata_kuliah" => "Pengantar Teknologi Informasi",
    "kode_mk" => "I1103",
    "hm" => "A",
    "am" => 4.00,
    "k" => 2,
    "m" => 8,],

    ["no" => 6,
    "mata_kuliah" => "Kalkulus I",
    "kode_mk" => "IF0003",
    "hm" => "B-",
    "am" => 2.70,
    "k" => 4,
    "m" => 10,8,],

    ["no" => 7,
    "mata_kuliah" => "Turu",
    "kode_mk" => "Not IF",
    "hm" => "S+",
    "am" => 5,
    "k" => 10,
    "m" => 50,],
];

$total_k = 0;
$total_m = 0;

echo '<tabLe border="1"; align="center"; style="border-collapse: collapse; border-color: #c1defb; font-family: Sans-serif;" >
<tr style="background-color: #224466; color: white;" >
<th rowspan=2 style="padding-right: 10px; padding-left: 10px;">No</th>
<th rowspan=2 style="padding-right: 150px; padding-left: 150px;">Mata Kuliah</th>
<th rowspan=2 style="padding-right: 25px; padding-left: 25px;">Kode Mata<br>Kuliah</th>
<th colspan=4 style="padding-right: 100px; padding-left: 100px; padding-top: 5px; padding-bottom: 5px;">PRESTASI</th>
</tr>';
echo '<tr style="background-color: #224466; color: white;">
<td style="text-align: center; padding-top: 5px; padding-bottom: 5px;">HM</td>
<td style="text-align: center;">AM</td>
<td style="text-align: center;">K</td>
<td style="text-align: center;">M</td>
</tr>';


foreach($nilais as $data => $nilai){
    if ($data % 2 == 0) {
        echo "<tr style='background-color: white; text-align: center;'>";
    } else {
        echo "<tr style='background-color: #e8eff9; text-align: center;'>";
    }
    echo "<td style='padding-top: 5px; padding-bottom: 5px;'>".$nilai['no']."</td>";
    echo "<td style='text-align: left;'>".$nilai['mata_kuliah']."</td>";
    echo "<td>".$nilai['kode_mk']."</td>";
    echo "<td>".$nilai['hm']."</td>";
    echo "<td>".$nilai['am']."</td>";
    echo "<td>".$nilai['k']."</td>";
    echo "<td>".$nilai['m']."</td>";
    "</tr>";
}

foreach ($nilais as $nilai) {
    $total_k += $nilai['k'];
    $total_m += $nilai['m'];
}
$ipk = number_format($total_m / $total_k,2);
echo '<tr style="text-align: center;">
<td colspan=5 style="text-align: right; background-color: #7ccbaa; padding-top: 5px; padding-bottom: 5px;"><strong>Jumlah</strong></td>
<td style="background-color: #e8eff9;">'.$total_k.'</td>
<td style="background-color: #e8eff9;">'.$total_m.'</td>
</tr>';
echo '<tr style="text-align: center;">
<td colspan=5 style="text-align: right; background-color: #dfd79b; padding-top: 5px; padding-bottom: 5px;"><strong>Indeks Prestasi Kumulatif (IPK)</strong></td>
<td colspan=2 style="background-color: #e8eff9;"><strong>'.$ipk.'</strong></td>
</tr>';
echo "</tabLe>";
?>
