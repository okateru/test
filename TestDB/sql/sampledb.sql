drop database if exists sampledb1;
create database sampledb1;
use sampledb1;

create table sample_table1(
No int,
name varchar(50),
age int,
mail varchar(50)
);

insert into sample_table1 values(1,"yamada",21,"xxx@yahoo.co.jp");
insert into sample_table1 values(2,"sato",39,"yyy@google.com");
insert into sample_table1 values(3,"harada",44,"zzz@yahoo.co.jp");