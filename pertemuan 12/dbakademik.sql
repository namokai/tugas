TABEL MATAKULIAH
 kdmtk varchar(10) not null, Primary Key
 namamtk varchar(20) not null,
 sks int not null,
 semester int, 
 
TABEL MAHASISWA
NIM int not null, Primary Key
nama varchar(25) not null,
kelas varchar(5), 

TABEL KHS
Periode varchar(6) not null, 
tgldate primary key, Primary Key
NIM int not null, 
kdmtk varchar(10) not null, 
nilai varchar(2) not null, 
bobot varchar(6),
