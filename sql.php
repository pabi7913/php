

<!--JOIN以左邊為準(全入),加入右邊的表,-->
SELECT * FROM `products` AS p
LEFT JOIN `categories` AS c
ON `p`.`category_sid`=`c`.`sid`


<!--排序:反著排DESC-->
SELECT * FROM `products`
ORDER BY `author` ASC, `sid` DESC

<!---->
SELECT * FROM `products`
WHERE `author` LIKE'%陳%'

<!---->
SELECT * FROM `products`
WHERE `author` LIKE'%陳%'

<!---->
SELECT * FROM `products` WHERE `author` ='陳佩婷'

<!--找空值-->
SELECT * FROM `products` WHERE `author` is null


<!--找出類別 (10,14,21,6)各1個-->
SELECT * FROM `products` WHERE `sid` IN (10,14,21,6)

<!--隨機排列-->
SELECT * FROM `products` WHERE `sid` IN (10,14,21,6) ORDER BY RAND()

SELECT
 p.`category_sid`,
 COUNT(*) num,
 c.name
FROM `products` p
JOIN `categories` c ON p.category_sid=c.sid
GROUP BY p.`category_sid`;


SELECT
-- 選擇3個表頭
 p.`category_sid`, COUNT(*) num, c.name
-- 3個表頭來自...
FROM `products` p JOIN `categories` c 
-- 比對找出一樣的
ON p.category_sid=c.sid 
-- 群組化
GROUP BY p.`category_sid`

-- 計算所有類別
SELECT p.`category_sid`,COUNT(1) FROM `products` p

-- 現在時刻
SELECT NOW()
-- A:2021-04-09 11:18:05







