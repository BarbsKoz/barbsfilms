create database barbs_films;
use barbs_films;
create table movies(
	id int primary key,
    name_movie varchar(40),
    genre varchar(20),
    duration varchar(8),
    score int,
    director varchar(30)
);
insert into movies(id, name_movie, genre, duration, score, director) values(1, "1917", "Action", "01:59", 4, "Sam Mendes");
insert into movies(id, name_movie, genre, duration, score, director) values(2, "Scarface", "Action", "02:50", 5, "Brian De Palma");
insert into movies(id, name_movie, genre, duration, score, director) values(3, "The Incredibles", "Animate", "01:56", 4, "Brad Bird");
insert into movies(id, name_movie, genre, duration, score, director) values(4, "Rocky", "Drama", "01:59", 5, "John Avildsen");
insert into movies(name_movie, genre, duration, score, director) values("Pulp Fiction", "Action", "02:39", 5, "Quentin Tarantino");

select * from movies;
select * from movies where id=1;
select * from movies where genre="animate";

alter table movies modify column id int auto_increment;
delete from movies where name_movie="1917";