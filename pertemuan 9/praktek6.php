<?php
$nama= "Alifian Aurelyo Raditya";
$nip= "120103022";
$gaji= 2000000;
$tunj = 0.05 * $gaji;
$bonus = 500000;
$pajak = 0.1 * $gaji;
$bersih = ($gaji + $tunj + $bonus) - $pajak;

echo "======================== <br> ";
echo "Nip : $nip <br>" ;
echo "Nama Anda  : $nama <br>" ;
echo "======================== <br> ";
echo "Gaji Pokok Anda Sebesar : Rp $gaji <br>";
echo "Tunjangan Anda Sebesar : Rp $tunj <br>";
echo "Bonus Anda Sebesar : Rp $bonus <br>";
echo "Pajak Anda Sebesar : Rp $pajak <br>";
echo "======================== <br> ";
echo "Gaji yang harus dibayarkan Sebesar : Rp $bersih <br>";
?>