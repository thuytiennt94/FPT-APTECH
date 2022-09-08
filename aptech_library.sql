create table if not exists library (
    bookid int(11) not null auto_increment,
    authorid int(11) not null,
    title varchar(55) not null,
    ISBN varchar(25) not null,
    pub_year smallint(6) not null,
    available tinyint(4) not null,
    primary key(bookid)
    ) engine=InnoDB default charset=utf8 auto_increment=4 ;

insert into library (bookid, authorid, title, ISBN, pub_year, available) values
('1','100536', 'PHP Web Development with Laravel', 'ISBN1234448', 0, 1),
('2','100362', 'C#-Beginner to Advanced Programming', 'ISBN4566-4261-3', 0, 1),
('3','100356', 'Intelligent Data Management with SQL Server', 'ISBN265-448-030-5', 0, 1),
('4','100356', 'Learning Java-A Foundational Journey', 'ISBN1065-256-97-0', 0, 1);
select * from library