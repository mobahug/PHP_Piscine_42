UPDATE db_ghorvath.ft_table
SET `creation_date` = date_add(`creation_date`, INTERVAL 20 YEAR)
WHERE `id` > 5;