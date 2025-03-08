create table pl(
id int primary key auto_increment,
ip varchar(16) not null comment 'IP地址',
loveid varchar(255) not null comment '留言寻找ID',
name varchar(6) not null comment '留言人昵称',
sakura varchar(255) not null comment '留言人内容',
time int not null comment '发布时间'
)charset utf8;

INSERT INTO pl(id,ip,loveid,name,sakura,time) VALUES (null,"127.0.0.1","1","樱振宇","TEXT","0000-00-00 00:00:00");