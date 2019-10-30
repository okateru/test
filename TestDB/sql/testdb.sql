drop database if exists testdb11;
create database testdb11;
use testdb11;

create table test_table11(
user_id int,
user_name varchar(255),
password varchar(255)
);

insert into test_table11 values(1,"taro","123");
insert into test_table11 values(2,"jiro","456");
insert into test_table11 values(3,"hanako","789");