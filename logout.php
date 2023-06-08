<?php
require_once("inc/Page.class.php");
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/UserDAO.class.php");

session_start();
session_destroy();

echo Page::pageHeader("LibraWeb - Logout");
echo Page::pageBanner();
echo Page::logOut();
echo Page::pageFooter();
echo Page::pageEnd();