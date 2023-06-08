<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Room.class.php");
require_once("./inc/Entities/ReservedRoom.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/DAO/RoomDAO.class.php");
require_once("./inc/Utilities/DAO/ReservedRoomDAO.class.php");
require_once("./inc/Page.class.php");

echo Page::pageHeader("events");
echo Page::pageBanner();
$image = array('src' => "./img/democracy.jpg",'date' => "TUESDAY, JUNE 6, 2023",'title' => "PRATICPEDIA-CERI SUMMER SCHOOL ON RADICAL DEMOCRACY",'from' => "Arts & Culture Presented by Woodword's Cultural Programs", 'figcaption'=> "LibarWeb respectfully acknowledges the unceded traditional territories on which Vancouver is located. We recognize that Vancouver is situated on the ancestral lands of numerous Indigenous Nations, including but not limited to the Musqueam, Squamish, and Tsleil-Waututh Peoples. We pay our respects to their Elders, past and present, and extend our gratitude for their stewardship of these lands throughout generations.");
echo Page::EventsPage($image);
echo Page::eventRow();
echo Page::pageFooter();
echo Page::pageEnd();