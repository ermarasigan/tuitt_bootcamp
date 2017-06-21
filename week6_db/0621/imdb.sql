
create table MovieStar (
    id int not null auto_increment,
    name varchar(255) not null,
    name varchar(255) not null,
    primary key(id),
    foreign key() references ()
);



address
gender



create table  (
    id int not null auto_increment,
     varchar(255) not null,
    primary key(id),
    foreign key() references ()
);

MovieExec
name
address
certificateNumber
netWorth


create table  (
    id int not null auto_increment,
     varchar(255) not null,
    primary key(id),
    foreign key() references ()
);

Studio
name
address
presidentName





create table Movies (
    id int not null auto_increment,
    title varchar(255) not null,
    year Year(4) not null,
    length int not null,
    genre varchar(255) not null,
    studioName varchar(255) not null,
    producerCertificateNumber varchar(255) not null
    primary key(id),
    foreign key(studioName) references Studio(name)
    	on update cascade
    	on delete set null
    foreign key(producerCertificateNumber) references MovieExec(certificateNumber)
    	on update cascade
    	on delete set null
);


create table StarsIn (
    id int not null auto_increment,
    movieTitle varchar(255) not null,
    movieYear Year(4) not null,
    starName varchar(255) not null
    primary key(id),
    foreign key(movieTitle) references Movies(title)
    	on update cascade
    	on delete set null
    foreign key(movieYear) references Movies(year)
    	on update cascade
    	on delete set null
    foreign key(starName) references MovieStar(name)
    	on update cascade
    	on delete set null
);









