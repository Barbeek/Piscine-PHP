SELECT DISTINCT(COUNT(id_film)) as films
FROM member_history
WHERE date BETWEEN '2006-10-30' AND '2007-07-27' 
OR (EXTRACT(DAY from date)=24 AND EXTRACT(MONTH from date)=12);