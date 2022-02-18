CREATE TABLE project_rittue.borrowers (
	borrow_id INT(4) NOT NULL AUTO_INCREMENT,
    lastname VARCHAR(50) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    phone VARCHAR(12),
    PRIMARY KEY (borrow_id)
    );
    
CREATE TABLE project_rittue.books (
	book_id INT(4) NOT NULL AUTO_INCREMENT,
    authorlast VARCHAR(50),
    authorfirst VARCHAR(30) NOT NULL,
    booktitle VARCHAR(255) NOT NULL,
    bookpubdate DATE NOT NULL,
    bookgenre ENUM("FICTION", "NONFICTION", "POETRY", "ACADEMIC") NOT NULL,
    PRIMARY KEY (book_id)
    );
    
CREATE TABLE project_rittue.music (
	music_id INT(4) NOT NULL AUTO_INCREMENT,
    composerlast VARCHAR(50),
    composerfirst VARCHAR(30) NOT NULL,
    musictitle VARCHAR(255) NOT NULL,
    musicpubdate DATE NOT NULL,
    musicgenre ENUM("CLASSICAL", "BIGBAND", "OPERA") NOT NULL,
    PRIMARY KEY (music_id)
    );
    
CREATE TABLE project_rittue.collection (
	collection_id INT(4) NOT NULL AUTO_INCREMENT,
    book_id INT(4),
    music_id INT(4),
    PRIMARY KEY (collection_id)
    );

CREATE TABLE project_rittue.transactions (
	transaction_id INT(4) NOT NULL AUTO_INCREMENT,
    totalitems ENUM("1", "2", "3") NOT NULL,
    dateout DATE NOT NULL,
    datereturned DATE,
    borrow_id INT(4) NOT NULL,
    PRIMARY KEY (transaction_id),
    FOREIGN KEY (borrow_id) REFERENCES borrowers(borrow_id)
    );
    
    CREATE TABLE project_rittue.transaction_item (
	transaction_item_id INT(4) NOT NULL AUTO_INCREMENT,
    collection_id INT(4) NOT NULL,
    transaction_id INT(4) NOT NULL,
    PRIMARY KEY (transaction_item_id)
    );
    
    ALTER TABLE project_rittue.borrowers AUTO_INCREMENT=1000;
    
    ALTER TABLE project_rittue.books AUTO_INCREMENT=1000;
    
    ALTER TABLE project_rittue.music AUTO_INCREMENT=1000;
    
    ALTER TABLE project_rittue.collection AUTO_INCREMENT=1000;
    
	ALTER TABLE project_rittue.transactions AUTO_INCREMENT=1000;
    
    ALTER TABLE project_rittue.transaction_item AUTO_INCREMENT=1000;
    
    ALTER TABLE project_rittue.collection
     ADD FOREIGN KEY (book_id) REFERENCES project_rittue.books(book_id);
     
	ALTER TABLE project_rittue.collection
     ADD FOREIGN KEY (music_id) REFERENCES project_rittue.music(music_id);
     
	ALTER TABLE project_rittue.transaction_item
     ADD FOREIGN KEY (collection_id) REFERENCES project_rittue.collection(collection_id);

	ALTER TABLE project_rittue.transaction_item
     ADD FOREIGN KEY (transaction_id) REFERENCES project_rittue.transactions(transaction_id);     
    
    