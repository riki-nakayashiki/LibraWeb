<?php

class BooksSort {
    private $booksList = [];

    public function getBooksList() {
        return $this->booksList;
    }

    public function setBooksList($newBooksList) {
        $this->booksList = $newBooksList;
    }

    public static function sortById($book1, $book2) {
        return $book1->getId() <=> $book2->getId();
    }
    public static function sortByIsbn($book1, $book2) {
        return $book1->getIsbn() <=> $book2->getIsbn();
    }
    public static function sortByTitle($book1, $book2) {
        return $book1->getBookTitle() <=> $book2->getBookTitle();
    }
    public static function sortByAuthor($book1, $book2) {
        return $book1->getBookAuthor() <=> $book2->getBookAuthor();
    }
    public static function sortByPublication($book1, $book2) {
        return $book1->getPublication() <=> $book2->getPublication();
    }
    public static function sortByPublisher($book1, $book2) {
        return $book1->getPublisher() <=> $book2->getPublisher();
    }

    public function sortBooks($sortBy) {
        switch($sortBy){
            case "id":
                usort($this->booksList,'self::sortById');
            break;
            case "isbn":
                usort($this->booksList,'self::sortByIsbn');
            break;
            case "title":
                usort($this->booksList,'self::sortByTitle');
            break;
            case "author":
                usort($this->booksList,'self::sortByAuthor');
            break;
            case "publication":
                usort($this->booksList,'self::sortByPublication');
            break;
            case "publisher":
                usort($this->booksList,'self::sortByPublisher');
            break;
        }
    }
}