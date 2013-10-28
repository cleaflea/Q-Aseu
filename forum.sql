create table if not exists forums(
forum_id tinyint unsigned not null auto_increment,
name varchar(60) not null,
primary key (forum_id),
unique (name)
) engine = innodb default character set utf8 collate utf8_general_ci auto_increment=1;

create table if not exists messages(
message_id int unsigned not null auto_increment,
parent_id int unsigned not null default 0,
forum_id tinyint unsigned not null,
user_id mediumint unsigned not null,
subject varchar(100) not null,
body longtext not null,
date_entered datetime not null,
primary key (message_id),
index (parent_id),
index (forum_id),
index (user_id),
index (date_entered)
) engine = myisam default character set utf8 collate utf8_general_ci auto_increment=1;

create table if not exists users(
user_id mediumint unsigned not null auto_increment,
username varchar(30) not null,
pass char(40) not null,
first_name varchar(20) not null,
last_name varchar(40) not null,
email varchar(60) not null,
primary key (user_id),
unique (username),
unique (email),
index login (pass, email)
)engine = innodb default character set utf8 collate utf8_general_ci auto_increment=1;