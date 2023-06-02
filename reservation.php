<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Room.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/DAO/RoomDAO.class.php");
require_once("./inc/Page.class.php");

session_start();
RoomDAO::startDb();
echo Page::pageHeader("Reservation");
echo Page::pageBanner();
if (isset($_GET['purpose'])) {
    $purpose = $_GET['purpose'];
    $splitPurpose = explode(' ', $purpose);
    echo Page::createReservationPage($splitPurpose[0]);
    echo Page::reservationRow($splitPurpose[0]);
};
echo Page::pageFooter();
echo Page::pageEnd();

