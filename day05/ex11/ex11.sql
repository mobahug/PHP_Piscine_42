SELECT UPPER(user_card.last_name) AS 'NAME', user_card.first_name, subscription.price
FROM db_ghorvath.user_card
INNER JOIN db_ghorvath.member ON member.id_member = user_card.id_user
INNER JOIN db_ghorvath.subscription ON subscription.id_sub = member.id_sub
WHERE subscription.price > 42
ORDER BY user_card.last_name, user_card.first_name;