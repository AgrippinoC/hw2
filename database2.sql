Create DATABASE hw2Casaccio;
USE hw2Casaccio;

CREATE TABLE users (
    id integer primary key auto_increment,
    name varchar(255) not null,
    surname varchar(255) not null,
	username varchar(16) not null unique,
    email varchar(255) not null unique,
    password varchar(255) not null,
    created_at timestamp,
    updated_at timestamp
) Engine = InnoDB;

CREATE TABLE oranges (
    id integer primary key auto_increment,
    user_id integer,
    arance varchar(255),
    created_at timestamp,
    updated_at timestamp
) Engine = InnoDB;

CREATE TABLE comments (
    id integer primary key auto_increment,
    user_id varchar(16),
    commenti varchar(255),
    stella integer(5),
    created_at timestamp,
    updated_at timestamp
) Engine = InnoDB;