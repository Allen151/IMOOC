#�������ݿ�
create database info;

ALTER DATABASE info CHARACTER SET =  utf8; 

#����article���ݱ�
create table article (
		id int(11) not null auto_increment primary key,
		title char(100) not null ,
		author char(50) not null,
		description varchar(255) not null ,
		content text not null,
		dateline int(11) not null default 0
);
#�����¼
insert into article(title, author, description, content)
values('�ҵĵ�һƪ����','yue','��һƪ����','��Ծ�ĵ�һƪ����');

create table introduce(
		about varchar(255) not null,
		contact varchar(255) not null
);

insert into introduce(about, contact)
values('about me ...','contact');