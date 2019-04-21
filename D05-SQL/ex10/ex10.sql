SELECT title as 'Title', summary as 'Summary'
FROM film NATURAL JOIN genre
WHERE name = 'erotic'
ORDER by prod_year DESC;