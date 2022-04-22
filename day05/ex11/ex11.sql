SELECT UPPER(`last_name`) AS 'NAME', `first_name`, `price`
FROM `user_card`
INNER JOIN db_ghorvath.member ON member.id_user_card = user_card.id_user
INNER JOIN db_ghorvath.subscription ON subscription.id_sub = member.id_sub
WHERE `price` > 42
ORDER BY `last_name`, `first_name` ASC;