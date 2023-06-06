<?php

class Books {
    private int $id;
    private string $isbn;
    private string $bookTitle;
    private string $bookAuthor;
    private string $publication;
    private string $publisher;

    /**
     * @return int id
     */
    public function getId() : int {
        return $this->id;
    }

    /**
     * @param int $newId
     * @return void
     */
    public function setId( int $newId ) : void {
        $this->id = $newId;
    }

    /**
     * @return string isbn
     */
    public function getIsbn() : string {
        return $this->isbn;
    }

    /**
     * @param string $newIsbn
     * @return void
     */
    public function setIsbn( string $newIsbn ) : void {
        $this->isbn = $newIsbn;
    }

    /**
     * @return string bookTitle
     */
    public function getBookTitle() : string {
        return $this->bookTitle;
    }

    /**
     * @param string $newBookTitle
     * @return void
     */
    public function setBookTitle( string $newBookTitle ) : void {
        $this->bookTitle = $newBookTitle;
    }

    /**
     * @return string bookAuthor
     */
    public function getBookAuthor() : string {
        return $this->bookAuthor;
    }

    /**
     * @param string $newBookAuthor
     * @return void
     */
    public function setBookAuthor( string $newBookAuthor ) : void {
        $this->bookAuthor = $newBookAuthor;
    }

    /**
     * @return string publication
     */
    public function getPublication() : string {
        return $this->publication;
    }

    /**
     * @param string $newPublication
     * @return void
     */
    public function setPublication( string $newPublication ) : void {
        $this->publication = $newPublication;
    }

    /**
     * @return string publisher
     */
    public function getPublisher() : string {
        return $this->publisher;
    }

    /**
     * @param string $newPublisher
     * @return void
     */
    public function setPublisher( string $newPublisher ) : void {
        $this->publisher = $newPublisher;
    }
}