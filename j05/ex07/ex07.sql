SELECT `titre`, `resum`
FROM `film`
WHERE `titre` like '%42%' OR `resum` like '%42%'
ORDER BY `duree_min` ASC;
