<?php
//data tabel nilai
$nilais = [
    ["no" => 1,
    "mata_kuliah" => "Algoritma dan Struktur Data I",
    "kode_mk" => "I1206",
    "hm" => "B",
    "k" => 3,],

    ["no" => 2,
    "mata_kuliah" => "Algoritma dan Struktur Data II",
    "kode_mk" => "IF0017",
    "hm" => "B+",
    "k" => 3,],

    ["no" => 3,
    "mata_kuliah" => "Logika Informatika",
    "kode_mk" => "I1108",
    "hm" => "A-",
    "k" => 2,],

    ["no" => 4,
    "mata_kuliah" => "Pemrograman Web I",
    "kode_mk" => "IF0012",
    "hm" => "A",
    "k" => 3,],

    ["no" => 5,
    "mata_kuliah" => "Pengantar Teknologi Informasi",
    "kode_mk" => "I1103",
    "hm" => "A",
    "k" => 2,],

    ["no" => 6,
    "mata_kuliah" => "Kalkulus I",
    "kode_mk" => "IF0003",
    "hm" => "B",
    "k" => 4,],

    ["no" => 7,
    "mata_kuliah" => "Turu",
    "kode_mk" => "Not IF",
    "hm" => "S+",
    "k" => 4,],
];

function getScores($score){
    $point = [
        "S+" => 5.00,
        "A" => 4.00,
        "A-" => 3.70,
        "B+" => 3.30,
        "B" => 3.00,
        "B-" => 2.70,
        "C+" => 2.30,
        "C" => 2.00,
        "C-" => 1.70,
    ];
    return $point[$score];
};

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
    echo "<td>".getScores($nilai['hm'])."</td>";
    echo "<td>".$nilai['k']."</td>";
    echo "<td>".(getScores($nilai['hm']) * $nilai['k'])."</td>";
    "</tr>";
}

foreach ($nilais as $nilai) {
    $total_k += $nilai['k'];
    $total_m += getScores($nilai['hm']) * $nilai['k'];
}
<<<<<<< HEAD

function getPredikatKelulusan($ipk){
    if ($ipk >= 2.50 and $ipk <= 2.75){
        return "Lulus";
    }
    elseif ($ipk >= 2.76 and $ipk <= 3.00){
        return "Memuaskan";
    }
    elseif ($ipk >= 3.01 and $ipk <= 3.50){
        return "Sangat Memuaskan";
    }
    elseif ($ipk >= 3.51 and $ipk <= 4.00){
        return "Dengan Pujian";
    }
}

$ipk = number_format($total_m / $total_k,2);

echo '<tr style="text-align: center;">
<td colspan=5 style="text-align: right; background-color: #7ccbaa; padding-top: 5px; padding-bottom: 5px;"><strong>Jumlah &nbsp;</strong></td>
<td style="background-color: #e8eff9;">'.$total_k.'</td>
<td style="background-color: #e8eff9;">'.$total_m.'</td>
</tr>';

echo '<tr style="text-align: center;">
<td colspan=5 style="text-align: right; background-color: #dfd79b; padding-top: 5px; padding-bottom: 5px;"><strong>Indeks Prestasi Kumulatif (IPK) &nbsp;</strong></td>
<td colspan=2 style="background-color: #e8eff9;"><strong>'.$ipk.'</strong></td>
</tr>';

echo '<tr style="text-align: center;">
<td colspan=5 style="text-align: right; color: white; background-color: #224466; padding-top: 5px; padding-bottom: 5px;"><strong>Predikat Kelulusan</strong> &nbsp;</td>
<td colspan=2 style="background-color: #e8eff9;"><strong>'.getPredikatKelulusan($ipk).'</strong></td>
</tr>';
echo "</tabLe>";
?>
=======
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
>>>>>>> 500038120e2e5e9ebe522b286d341ab5953cdd8c
