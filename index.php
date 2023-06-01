<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Books.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/BooksDAO.class.php");
require_once("inc/Utilities/Page.class.php");

BooksDAO::startDb();

echo Page::pageHeader("LibraWeb");
echo Page::pageBanner();
// echo Page::mainContent();
echo Page::pageTable(
    BooksDAO::getAllBooks()
);
echo Page::pageFooter();
echo Page::pageEnd();