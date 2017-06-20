


1) Find address of MGM studios
select address from Studio 
where name like 'MGM%' or 'Metro Goldwyn Mayer';


2) Find all the stars that appeared 
either in a movie made from 1980 or contains "Love" in title


select starName from Starsin
where movieYear = '1980'
or movieTitle like '%love%';


3) Find * executives worth at least 10M
select name from MovieExec 
where netWorth >= 10000000;


4) Find all stars who are either MALE or live in MALIBU
(have string Malibu as part of their address)

select * from MovieStar 
where gender like 'm%' or address like '%malibu%';


5) Who are the male stars in Titanic

select MovieStar.name from MovieStar join Starsin
on Starsin.starName = MovieStar.name 
where MovieStar.gender like 'm%'
and Starsin.movieTitle = 'Titanic';

6) 
Which stars appeared in movies produced
by MGM in 1995


select StarsIn.starName from
StarsIn join Movies
on StarsIn.movieTitle = Movies.title
where Movies.year = 1995
and (Movies.studioName like 'MGM%'
or Movies.studioName like 'Metro Goldwyn Mayer%');

select s.starName from
StarsIn as s join Movies as m
on s.movieTitle = m.title
where m.year = 1995
and (m.studioName like 'MGM%'
or m.studioName like 'Metro Goldwyn Mayer%');


--) Which movies are longer than the movie
'Gone With the Wind'

select title from Movies 
where length > 
(select length 
from Movies 
where title = 'Gone With the Wind');


7) Who is the producer of Star Wars
select MovieExec.name
from MovieExec join Movies 
on Movies.producerCertificateNumber
= MovieExec.CertificateNumber
where Movies.title like 'Star%Wars%';


8) Who are the producer 
of Harrison Fords movies?

select MovieExec.name
from MovieExec
    ,Movies
    ,StarsIn
where StarsIn.starName = "Harrison Ford"
and Movies.producerCertificateNumber
= MovieExec.CertificateNumber
and Movies.name = StarsIn.starName


select albums.name as album_name,
       albums.year as album_year,
       songs.title as song_title,
       songs.length as song_length,
       songs.genre as song_genre,
       artists.name as artist_name
       from albums join  songs join artists
       on songs.album_id = albums.id
       and  albums.artist_id = artists.id;
       

select albums.name as album_name,
       albums.year as album_year,
       songs.title as song_title,
       songs.length as song_length,
       songs.genre as song_genre,
       artists.name as artist_name
       from songs  join  albums
       on songs.album_id = albums.id
       join artists
       on albums.artist_id = artists.id;
       

create table Movies (
    id int not null auto_increment,
    title varchar(255) not null,
    year year(4) not null,
    length int not null,
    genre varchar(255) not null,
    studioName varchar(255) not null,
    producerCertificateNumber
    primary key(id),
    foreign key() references ()
);



create table  (
    id int not null auto_increment,
     varchar(255) not null,
    primary key(id),
    foreign key() references ()
);
