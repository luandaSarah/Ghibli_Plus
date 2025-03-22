DROP DATABASE IF EXISTS ghibli_plus;
CREATE DATABASE ghibli_plus;
SET default_storage_engine=InnoDB;
USE ghibli_plus;

/* CREATION DES TABLES*/
CREATE TABLE users (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
  firstname VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  role JSON DEFAULT NULL
);

CREATE TABLE directors (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) UNIQUE NOT NULL,
  description TEXT
);

CREATE TABLE movies (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) UNIQUE NOT NULL,
  description TEXT,
  coverURL VARCHAR(255) NOT NULL,
  videoURL VARCHAR(255) NOT NULL,
  director_id INT UNSIGNED NOT NULL,
  release_date DATE NOT NULL
);


CREATE TABLE categories (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE movies_categories (
  movie_id INT UNSIGNED NOT NULL,
  category_id INT UNSIGNED NOT NULL
);

CREATE TABLE watchlist (
  user_id INT UNSIGNED NOT NULL,
  movie_id INT UNSIGNED NOT NULL,
  watched BOOL NOT NULL DEFAULT '0',
  add_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE history (
  user_id INT UNSIGNED NOT NULL,
  movie_id INT UNSIGNED NOT NULL,
  watch_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

/* CREATION DES RELATIONS */

-- movies -> director_id
ALTER TABLE movies 
ADD CONSTRAINT FK_MoviesDirectorId_DirectorsId
FOREIGN KEY (director_id) REFERENCES directors(id);

-- movies_categories
ALTER TABLE movies_categories
ADD CONSTRAINT FK_MoviesCategoriesMovieId_MoviesId
FOREIGN KEY (movie_id) REFERENCES movies(id);

ALTER TABLE movies_categories
ADD CONSTRAINT FK_MoviesCategoriesCaregorieId_CategoryId
FOREIGN KEY (category_id) REFERENCES categories(id);

-- history
ALTER TABLE history 
ADD CONSTRAINT FK_HistoryUserId_UsersId
FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE history 
ADD CONSTRAINT FK_HistoryMovieId_MoviesId
FOREIGN KEY (movie_id) REFERENCES movies(id);

-- watchlist
ALTER TABLE watchlist 
ADD CONSTRAINT FK_WatchlistUserId_UsersId
FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE watchlist 
ADD CONSTRAINT FK_WatchlistMovieId_MoviesId
FOREIGN KEY (movie_id) REFERENCES movies(id);


/* CREATION DES COUPLES UNIQUES */

-- watchlist
ALTER TABLE watchlist 
ADD CONSTRAINT UQ_UserId_MovieId
UNIQUE (user_id, movie_id);

-- history
ALTER TABLE history 
ADD CONSTRAINT UQ_UserId_MovieId
UNIQUE (user_id, movie_id);

-- movies_categories
ALTER TABLE movies_categories 
ADD CONSTRAINT UQ_categoryId_movieId
UNIQUE (category_id, movie_id);

