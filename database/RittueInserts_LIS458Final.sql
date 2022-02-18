INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Shakespeare", "William", "Twelfth Night", "2009-05-01", "FICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Shakespeare", "William", "Titus Andronicus", "2010-07-01", "FICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Kingsolver", "Barbara", "Animal, Vegetable, Miracle", "2007-05-01", "NONFICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Everett", "Percival", "Erasure", "2001-01-01", "FICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Gioia", "Dana", "The Art of the Short Story", "2005-01-01", "ACADEMIC");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Myles", "Eileen", "Cool For You", "2000-11-01", "FICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Murray", "Sabina", "A Carnivore's Inquiry", "2005-07-18", "FICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Evenson", "Brian", "Immobility", "2012-04-10", "FICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Gill", "Nikita", "Wild Embers", "2017-11-14", "POETRY");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Morrison", "Toni", "Beloved", "1987-09-01", "FICTION");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Christensen", "Angi M.", "Forensic Anthropology: Current Methods and Practices", "2014-01-22", "ACADEMIC");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Kutner", "Marc L.", "Astronomy: A Physical Perspective", "2003-07-01", "ACADEMIC");

INSERT INTO project_rittue.books (authorlast, authorfirst, booktitle, bookpubdate, bookgenre)
VALUES ("Myles", "Eileen", "Snowflake / Different Streets", "2012-04-01", "POETRY");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Bach", "J.S.", "Mass in B Minor", "2011-01-01", "CLASSICAL");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Bach", "J.S.", "St. Matthew Passion", "2015-01-01", "CLASSICAL");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Bach", "J.S.", "St. John Passion", "2012-0-01", "CLASSICAL");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Handel", "George Friedrich", "Messiah", "1992-01-01", "CLASSICAL");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Puccini", "Giacomo", "Turandot", "1984-01-01", "OPERA");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Puccini", "Giacomo", "La Boheme", "1986-11-01", "OPERA");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Mozart", "Wolfgang Amadeus", "Don Giovanni", "2009-01-01", "OPERA");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Mozart", "Wolfgang Amadeus", "Le Nozze di Figaro", "2015-01-01", "OPERA");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Miller", "Glenn", "In The Mood", "1939-09-15", "BIGBAND");

INSERT INTO project_rittue.music (composerlast, composerfirst, musictitle, musicpubdate, musicgenre)
VALUES ("Basie", "Count", "Splanky", "1958-01-01", "BIGBAND");

INSERT INTO transactions (totalitems, dateout, datereturned, borrow_id)
	VALUES
		('2', '2018-10-10', '2018-11-08', '1'),
		('1', '2018-10-27', '2018-11-30', '3'),
        ('1', '2018-11-30', '2018-12-21', '2'),
        ('3', '2019-01-06', '2019-02-03', '4'),
        ('3', '2019-01-26', '2019-03-31', '5'),
        ('2', '2019-05-20', '2019-06-15', '1'),
        ('3', '2019-07-01', '2019-08-08', '6'),
        ('1', '2019-08-13', '2019-09-25', '2'),
        ('3', '2019-09-23', '2019-09-25', '5'),
        ('3', '2019-10-03', '2019-10-25', '2'),
        ('3', '2019-12-13', '2020-01-25', '4'),
        ('3', '2020-01-13', '2020-02-26', '6'),
        ('1', '2020-03-04', '2020-04-06', '3'),
        ('2', '2020-03-21', '2020-04-15', '5'),
        ('3', '2020-03-30', '2020-04-20', '4'),
        ('1', '2020-04-20', null, '5'),
        ('2', '2020-04-20', null, '1');
        
INSERT INTO transaction_item (collection_id, transaction_id)
	VALUES
		('1005', '1017'),
        ('1003', '1017'),
        ('1010', '1018'),
        ('1000', '1019'),
        ('1020', '1020'),
        ('1008', '1020'),
        ('1013', '1020'),
        ('1001', '1021'),
        ('1018', '1021'),
        ('1004', '1021'),
        ('1004', '1022'),
        ('1019', '1022'),
        ('1015', '1023'),
        ('1009', '1023'),
        ('1014', '1023'),
        ('1017', '1024'),
		('1001', '1025'),
        ('1018', '1025'),
        ('1007', '1025'),
        ('1011', '1026'),
        ('1010', '1026'),
        ('1020', '1026'),
        ('1003', '1027'),
        ('1019', '1027'),
        ('1020', '1027'),
        ('1009', '1028'),
        ('1014', '1028'),
        ('1015', '1028'),
        ('1022', '1029'),
        ('1019', '1030'),
        ('1021', '1030'),
        ('1011', '1031'),
        ('1005', '1031'),
        ('1022', '1031'),
		('1000', '1032'),
        ('1012', '1033'),
        ('1013', '1033');