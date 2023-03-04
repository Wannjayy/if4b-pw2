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
    "hm" => "C+",
    "k" => 3,],

    ["no" => 3,
    "mata_kuliah" => "Komputasi Hijau",
    "kode_mk" => "RIF0001",
    "hm" => "E",
    "k" => 4,],

    ["no" => 4,
    "mata_kuliah" => "Logika Informatika",
    "kode_mk" => "I1108",
    "hm" => "A",
    "k" => 2,],

    ["no" => 5,
    "mata_kuliah" => "Pemrograman Web I",
    "kode_mk" => "IF0012",
    "hm" => "B+",
    "k" => 3,],

    ["no" => 6,
    "mata_kuliah" => "Pemrograman Web II",
    "kode_mk" => "IF0019",
    "hm" => "D",
    "k" => 3,],


    ["no" => 7,
    "mata_kuliah" => "Pengantar Teknologi Informasi",
    "kode_mk" => "I1103",
    "hm" => "A",
    "k" => 2,],

    ["no" => 8,
    "mata_kuliah" => "Kalkulus I",
    "kode_mk" => "IF0003",
    "hm" => "D",
    "k" => 4,],

    ["no" => 9,
    "mata_kuliah" => "Kalkulus II",
    "kode_mk" => "IF0007",
    "hm" => "D",
    "k" => 4,],

    ["no" => 10,
    "mata_kuliah" => "Tugas Akhir",
    "kode_mk" => "IF0055",
    "hm" => "C",
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
        "D" => 1.00,
        "E" => 0.00,
    ];
    return $point[$score];
};

$total_k = 0;
$total_m = 0;
$total_k_d = 0;

echo '<table border="1"; align="center"; style="border-collapse: collapse; border-color: #c1defb; font-family: Sans-serif;" >
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

function getPredikatKelulusan($ipk){
    if ($ipk >= 0.00 and $ipk <= 1.99){
        return "Dengan Hinaan";
    }
    elseif ($ipk >= 2.00 and $ipk < 2.50){
        return "Tidak Lulus";
    }
    elseif ($ipk >= 2.50 and $ipk <= 2.75){
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

echo '<tr>
<td colspan=7 style="text-align: center;">=====</td>
</tr>';


foreach ($nilais as $data => $nilai) {
    //jumlah sks total nilai D
    if ($nilai['hm'] == 'D') {
        $total_k_d += $nilai['k'];
    }
}

//nilai E
function getNilaiE($nilais) {
    $status = "Memenuhi";
    $tidak_memenuhi = false;
    foreach ($nilais as $nilai) {
        if ($nilai['hm'] === "E") {
            $tidak_memenuhi = true;
        }
    }

    if ($tidak_memenuhi) {
        $status = "Tidak memenuhi";
    }

    return $status;
}

echo '<tr style="text-align: center; color: white;">
<td style="text-align: center;background-color: #224466; padding-top: 5px; padding-bottom: 5px;"><strong>No</strong></td>
<td colspan=2 style="background-color: #224466;"><strong>Syarat Yudisium</strong></td>
<td colspan=4 style="background-color: #224466;"><strong>Kriteria</strong></td>
</tr>';

echo "<tr style='background-color: white; text-align: center;'>";
echo "<td style='padding-top: 5px; padding-bottom: 5px;'>1</td>";
echo "<td colspan=2 style='text-align: left;'>Lulus Ujian Pendadaran<br>Skripsi/TA/BPP dengan nilai ≥ C</td>";
if ($nilai['kode_mk'] == "IF0055" && getScores($nilai['hm']) >= getScores("C")) {
    echo "<td colspan=4>Memenuhi</td>";
} else {
    echo "<td colspan=4>Tidak Memenuhi</td>";
}   
"</tr>";

echo "<tr style='background-color: #e8eff9; text-align: center;'>";
echo "<td style='padding-top: 5px; padding-bottom: 5px;'>2</td>";
echo "<td colspan=2 style='text-align: left;'>Indeks Prestasi Kumulatif(IPK) ≥ 2.50</td>";
if ($ipk >= 2.50){
    echo "<td colspan=4>Memenuhi</td>";
} else {
    echo "<td colspan=4>Tidak Memenuhi</td>";
}
"</tr>";

echo "<tr style='background-color: white; text-align: center;'>";
echo "<td style='padding-top: 5px; padding-bottom: 5px;'>3</td>";
echo "<td colspan=2 style='text-align: left;'>Tidak ada Nilai E</td>";
echo "<td colspan=4>".getNilaiE($nilais)."</td>";
"</tr>";

echo "<tr style='background-color: #e8eff9; text-align: center;'>";
echo "<td style='padding-top: 5px; padding-bottom: 5px;'>4</td>";
echo "<td colspan=2 style='text-align: left;'>Proporsi Nilai D Maksimum 8 sks<br>(untuk S1)</td>";
if ($total_k_d <= 8){
    echo "<td colspan=4>Memenuhi<br>Jumlah SKS nilai D : ".$total_k_d." SKS</td>";
} else {
    echo "<td colspan=4>Tidak Memenuhi<br>Jumlah SKS nilai D : ".$total_k_d." SKS</td>";
}
"</tr>";
echo "</table>";
?>