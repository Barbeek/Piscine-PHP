SELECT last_name, first_name
FROM user_card
WHERE last_name LIKE '_%-%_' OR first_name LIKE '_%-%_'
ORDER by last_name, first_name ASC;