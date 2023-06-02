<?php

class BooksDao {
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Books");
    }

    public static function getAllBooks(){
        $sql = "SELECT * FROM books";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function searchingSorting($booksField, $sort=""){
        $sql = "SELECT * FROM books WHERE id LIKE :id OR isbn LIKE :isbn OR bookTitle LIKE :bookTitle OR bookAuthor LIKE :bookAuthor OR publication LIKE :publication OR publisher LIKE :publisher ORDER BY id";

        switch($sort){
            case "DESC";
                $sql .= " DESC";
            break;
            default:
                $sql .= " ASC";
            break;
        }

        self::$db->query($sql);
        self::$db->bind(":id","%$booksField%");
        self::$db->bind(":isbn","%$booksField%");
        self::$db->bind(":bookTitle","%$booksField%");
        self::$db->bind(":bookAuthor","%$booksField%");
        self::$db->bind(":publication","%$booksField%");
        self::$db->bind(":publisher","%$booksField%");

        self::$db->execute();

        return self::$db->resultSet();
    }
}