SELECT REVERSE(SUBSTRING(distrib.phone_number, 2)) AS 'rebmunenohp'
FROM db_ghorvath.distrib
WHERE distrib.phone_number LIKE '05%';