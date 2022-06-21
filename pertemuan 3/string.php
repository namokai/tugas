<?php
$namaDepan = "Ibnu"; # pakai tanda petik dua 
$namaBelakang = 'Jakaria'; # pakai tanda petik satu
# menggabungkan dua variabel dengan tanda
# petik dua
$namalengkap = "$namaDepan} {$namaBelakang)";
# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namalengkap2 = $namaDepan.''.$namaBelakang;
# [Tampilkan Data]
# kita bisa memasukkan variabel Lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan> <br>";
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel
# di dalam string akan tetapi menggabungkannya dengan operator titik (.) 
echo 'Nama Belakang: ' . |$namaBelakang . '<br>';
echo $namalengkap;