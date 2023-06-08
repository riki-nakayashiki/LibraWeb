<?php

require_once("./inc/Page.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");

if (!empty($_POST)) {
    UserDAO::startDb();
    $newUser = new User();
    $newUser->setFirstName($_POST['firstName']);
    $newUser->setLastName($_POST['lastName']);
    $newUser->setAddress($_POST['address']);
    $newUser->setAge($_POST['age']);
    $newUser->setEmail($_POST['email']);
    $newUser->setUserType($_POST['userType']);

    $newPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $newUser->setPassword($newPass);
    $userExist = UserDAO::getUserByEmail($_POST['email']);

    if (!$userExist) {
        UserDAO::insertUser($newUser);
        echo 'Success adding new user!';
        unset($_POST);
    } else {
        echo 'Email you entered is already enrolled.';
    }
}

echo Page::pageHeader("LibraWeb - Admin");
echo Page::pageBanner();
echo Page::addNewUser();
echo Page::pageFooter();
echo Page::pageEnd();