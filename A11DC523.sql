<?php
create table book
(
book1 int identity(1,1) not null
,book2 varchar(15) not null
,book3 varchar(100) not null
,book4 date 
,constraint pk_book_book12 primary key (book12)
)

INSERT INTO book (book1,book2,book3) VALUES('bk-01','abc',getdate());
INSERT INTO book (book1,book2,book3) VALUES('bk-02','abcd',getdate());
INSERT INTO book (book1,book2,book3) VALUES('bk-03','abcde',getdate());
INSERT INTO book (book1,book2,book3) VALUES('bk-04','abcdef',getdate());
INSERT INTO book (book1,book2,book3) VALUES('bk-05','abcdefg',getdate());


INSERT INTO products (id, name, price) VALUES
    (1, 'ふとんクリーナー', 28800),
    (2, 'ダイソンコードレスクリーナー', 47610),
    (3, 'ロボット掃除機', 51500),
    (4, 'ブラザーコンピュータミシン', 18900),
    (5, '毛玉取り器', 2480),
    (6, 'ふとん専用ダニクリーナー', 17800),
    (7, '全自動洗濯機', 55000),
    (8, 'コードレスアイロン', 5980);
    