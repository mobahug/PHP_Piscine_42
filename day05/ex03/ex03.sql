INSERT INTO db_ghorvath.ft_table(login, `group`, creation_date)
SELECT last_name, birthday AS login FROM user_card
WHERE last_name LIKE '%a%'
AND lenght(last_name) < 9
ORDER BY last_name ASC
LIMIT 10;