<?php
require_once("inc/Page.class.php");
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Utilities/PDOService.class.php");

echo Page::pageHeader("LibraWeb");
echo Page::pageBanner();
echo Page::mainContent();
echo Page::pageFooter();
echo Page::pageEnd();