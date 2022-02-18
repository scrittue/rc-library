SELECT c.collection_id, b.booktitle, b.authorlast, 
b.authorfirst, b.bookgenre, m.musictitle, 
m.composerlast, m.composerfirst, m.musicgenre 
FROM collection AS c
LEFT OUTER JOIN books AS b ON b.book_id = c.book_id
LEFT OUTER JOIN music AS m ON m.music_id = c.music_id
WHERE c.collection_id IN (SELECT i.collection_id AS collection_id
			FROM transaction_item AS i
			RIGHT JOIN transactions AS t ON t.transaction_id = i.transaction_id
			WHERE t.datereturned IS NOT NULL)
GROUP BY c.collection_id;

SELECT t.borrow_id,b.firstname, b.lastname, b.phone
	FROM transactions AS t
    RIGHT JOIN borrowers AS b ON b.borrow_id = t.borrow_id
	WHERE datereturned IS NULL;
    
SELECT * FROM books
WHERE bookgenre = 'FICTION';

SELECT collection_id, 
    COUNT(collection_id)
FROM
    transaction_item
GROUP BY collection_id
HAVING COUNT(collection_id) > 1;

SELECT COUNT(*) FROM transactions
WHERE datereturned IS NULL;

SELECT t.transaction_id, b.firstname, b.lastname
FROM transactions AS t
	JOIN borrowers AS b
    WHERE t.borrow_id = b.borrow_id
ORDER BY b.borrow_id;

SELECT c.collection_id, b.booktitle, b.authorlast, b.authorfirst, b.bookgenre, m.musictitle, m.composerlast, m.composerfirst, m.musicgenre
	FROM collection AS c
    LEFT OUTER JOIN books AS b ON b.book_id = c.book_id
    LEFT OUTER JOIN music AS m ON m.music_id = c.music_id
    WHERE b.booktitle LIKE '%$search%'
      OR b.authorlast LIKE '%$search%'
      OR b.authorfirst LIKE '%$search%'
      OR b.bookgenre LIKE '%$search%'
      OR m.musictitle LIKE '%$search%'
      OR m.composerlast LIKE '%$search%'
      OR m.composerfirst LIKE '%$search%'
      OR m.musicgenre LIKE '%$search%'
GROUP BY c.collection_id;
