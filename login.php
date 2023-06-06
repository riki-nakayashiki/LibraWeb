<?php
require_once("inc/Page.class.php");
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/UserDAO.class.php");

if (!empty($_POST)) {
    UserDAO::startDb();

    $userEmail = $_POST['email'];
    $loginUser = UserDAO::getUserByEmail($userEmail);

    if ((gettype($loginUser) == "object") && (get_class($loginUser) == "User")) {
        //Check the password
        if ($loginUser->getPassword() === $_POST['password']) {
            //Start the session
            session_start();
            //Set the user to logged in
            $_SESSION["loggedin"] = true;
            $_SESSION['username'] = $loginUser;

            header("Location: index.php");
            exit();
        } else {
            echo Page::loginFailed();
        }
    } else {
        echo Page::loginFailed();
    }
}

echo Page::pageHeader("LibraWeb - Login");
echo Page::pageBanner();
echo Page::loginForm();
echo Page::pageFooter();
echo Page::pageEnd();