create database crud_mahasiswa;
use crud_mahasiswa;

create table tb_mahasiswa(
  npm char(8) not null primary key,
  nama varchar(30) not null,
  kelas char(5) not null,
  jenis_kelamin char(6) not null
 )engine=innodb;
				
