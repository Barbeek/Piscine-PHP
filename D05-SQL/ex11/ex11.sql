SELECT UPPER(last_name) AS 'NAME', first_name, price
FROM member 
INNER JOIN user_card ON user_card.id_user=member.id_user_card
NATURAL JOIN subscription
WHERE price > 42
ORDER by last_name, first_name ASC;