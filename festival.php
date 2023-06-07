<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Room.class.php");
require_once("./inc/Entities/ReservedRoom.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/DAO/RoomDAO.class.php");
require_once("./inc/Utilities/DAO/ReservedRoomDAO.class.php");
require_once("./inc/Page.class.php");

echo Page::pageHeader("Reservation");
echo Page::pageBanner();

echo Page::pageFooter();
echo Page::pageEnd();