<?php
// Echo adalah tim yang juara M4
echo "<h2>Biodata .... Siapa?</h2>";

/*
ini adalah contoh deklarasi variabel dengan 
tipe data teks bilangan bulat, bilangan desimal, boolean, ...
o> Nama variabel diawali dengan huruf atau garis bawah (_) 
o> Nama variabel hanya boleh ditulis dengan alphanumeric a-z,
A-Z, 0-9, dan garis bawah (_)
o> Nama variabel yang lebih dari satu kata dapat dipisahkan
dengan garis bawah. contoh: jenis_kelamin, gol_darah, ...
*/
$npm = "2125250050";
$nama = "Ahmad Wahana Jaya";
$jk = "Laki-laki";
$hobi = array("hobi1", "hobi2", "hobi3");
$usia = 228;
$tinggi = 180.5;

echo "<br/>";
echo "NPM : $npm <br/>";
echo "Nama : $nama<br/>";
echo "Jenis Kelamin : $jk <br/>";
echo "Hobi :  $hobi[1]<br/>";
echo "Usia: $usia bulan <br/>";
echo "Tinggi : $tinggi <br/>";

$kode_prodi = substr($npm, 4, 2);
$prodi = " ";
if ($kode_prodi == "24") {
    $prodi = "Sistem Informasi";
} elseif ($kode_prodi == "25") {
    $prodi = "Informatika";
} elseif ($kode_prodi == "27") {
    $prodi = "Teknik Elektro";
} elseif ($kode_prodi == "20") {
    $prodi = "Manajemen";
} elseif ($kode_prodi == "21") {
    $prodi = "Akuntansi";
} else {
    $prodi = "NPM salah";
}
echo "Prodi: $prodi";

echo "<ul>";
foreach($hobi as $data){
    echo"<li>".$data."</li>";
}
echo "</ul>";

//array asosiatif
$mahasiswa = array(
    "npm" => 2125250050,
    "nama" => "Ahmad Wahana Jaya"
);
echo $mahasiswa['npm'];
echo $mahasiswa['nama'];

//array multidimensi
$mahasiswas = [
    ["npm" => 2125250050,
    "nama" => "Ahmad Wahana"],
    ["npm" => 2125250051,
    "nama" => "Ahmad Jaya"]
];

//menampilkan array mahasiswa menggunakan foreach
echo "<tabLe border=1>
<tr>
<th>NPM</th><th>Nama Mahasiswa</th>
</tr>";
foreach($mahasiswas as $data){
    echo "<tr>
    <td>".$data['npm']."</td>
    <td>".$data['nama']."</td>
    </tr>";
}
echo "</tabLe>";
?>