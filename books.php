<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Books.class.php");
require_once("inc/Entities/BooksSort.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/BooksDAO.class.php");
require_once("inc/Page.class.php");

BooksDAO::startDb();
$booksMap = new BooksSort();
$booksMap->setBooksList(BooksDAO::getAllBooks());

echo Page::pageHeader("LibraWeb");
echo Page::pageBanner();
    
if(!empty($_GET)){
    $booksMap->sortBooks($_GET['sortBy']);
}

if(!empty($_POST['search'])) {
    $booksMap->setBooksList(BooksDAO::searchingSorting($_POST['search']));
}

echo Page::filter();
echo Page::pageTable(
    $booksMap->getBooksList()
);
echo Page::pageFooter();
echo Page::pageEnd();