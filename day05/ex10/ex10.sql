SELECT title AS 'Title', summary AS 'Summary', prod_year FROM db_ghorvath.film
INNER JOIN genre ON genre.id_genre = film.id_genre
WHERE genre.id_genre = 'erotic'
ORDER BY prod_year DESC;