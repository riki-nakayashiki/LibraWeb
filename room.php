<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Room.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/DAO/RoomDAO.class.php");
require_once("./inc/Page.class.php");

session_start();
RoomDAO::startDb();
echo Page::pageHeader("Room");
echo Page::pageBanner();
echo Page::roomRow();
if (isset($_GET['purpose'])) {
    $purpose = $_GET['purpose'];
    echo Page::createReservationPage($purpose);
} else {
    echo '<p>Please select a purpose to view available rooms for reservation.</p>';
}
echo Page::pageFooter();
echo Page::pageEnd();

