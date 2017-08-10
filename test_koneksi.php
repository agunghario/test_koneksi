<?php
# Gantilah variabel dan jalankan pada terminal sbb:
# $ php -f test_koneksi.php

$dbname = 'nama_database';
$dbuser = 'user';
$dbpass = 'pass';
$dbhost = 'host';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Gagal konek ke host : '$dbhost' \n");
mysqli_select_db($link, $dbname) or die("Koneksi berhasil, Tetapi tidak bisa membuka db : '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);
$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
$tblCnt++;
#echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
echo "Tidak terdapat Tabel<br />\n";
} else {

echo "Berhasil konek dengan database : $dbname \n";
echo "Terdapat : $tblCnt tabel disana.\n";

}
