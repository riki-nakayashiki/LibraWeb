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
}