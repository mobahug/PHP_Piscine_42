SELECT film.title AS 'Title', film.summary AS 'Summary', film.prod_year
FROM db_ghorvath.film
INNER JOIN db_ghorvath.genre ON genre.id_genre = film.id_genre
WHERE genre.id_genre = 'erotic'
ORDER BY film.prod_year DESC;