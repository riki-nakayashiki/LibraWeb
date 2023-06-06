<?php

require_once("./inc/Page.class.php");

echo Page::pageHeader("LibraWeb");
echo Page::pageBanner();
echo Page::mainContent();
echo Page::pageFooter();
echo Page::pageEnd();