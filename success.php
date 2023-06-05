<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Room.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/DAO/RoomDAO.class.php");
require_once("./inc/Page.class.php");

session_start();
RoomDAO::startDb();
echo Page::pageHeader("success");
echo Page::pageBanner();
echo Page::getSuccessMessage();
echo Page::pageFooter();
echo Page::pageEnd();

