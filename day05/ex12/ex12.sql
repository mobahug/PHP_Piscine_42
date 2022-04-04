SELECT user_card.last_name, user_card.first_name FROM db_ghorvath.user_card
WHERE user_card.last_name LIKE '%-%'
OR user_card.first_name LIKE '%-%'
ORDER BY user_card.last_name ASC, user_card.first_name ASC;