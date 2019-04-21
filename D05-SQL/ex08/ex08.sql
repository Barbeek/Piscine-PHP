SELECT last_name, first_name, DATE_FORMAT(birthdate, "%Y-%m-%d") 
AS 'birthdate' 
FROM user_card
WHERE EXTRACT(YEAR FROM birthdate) = 1989
ORDER by last_name ASC;