SELECT genre.id_genre AS 'id_genre', genre.name AS 'name_genre', distrib.id_distrib AS 'id_distrib', distrib.name AS 'name_distrib', film.title AS 'title_film' 
FROM film 
LEFT JOIN distrib ON distrib.id_distrib = film.id_distrib 
LEFT JOIN genre ON genre.id_genre = film.id_genre 
WHERE (film.id_genre > 3 AND film.id_genre < 9);