<?php
require_once('./inc/Utilities/PDOService.class.php');
require_once('./inc/config.inc.php');


class UserDAO
{

    private static $db;

    public static function startDb()
    {
        self::$db = new PDOService("User");
    }

    public static function insertUser(User $newUser)
    {
        $sql = "
                INSERT INTO users(
                    firstName,
                    lastName,
                    address,
                    age,
                    email,
                    password,
                    userType
                )
                VALUES(
                    :firstName,
                    :lastName,
                    :address,
                    :age,
                    :email,
                    :password,
                    :userType
                );
                ";

        self::$db->query($sql);

        self::$db->bind(":firstName", $newUser->getFirstName());
        self::$db->bind(":lastName", $newUser->getLastName());
        self::$db->bind(":address", $newUser->getAddress());
        self::$db->bind(":age", $newUser->getAge());
        self::$db->bind(":email", $newUser->getEmail());
        self::$db->bind(":password", $newUser->getPassword());
        self::$db->bind(":userType", $newUser->getUserType());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllUsers()
    {
        $sql = "SELECT * FROM users";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getUserByEmail(string $email)
    {
        $sql = "SELECT * FROM users WHERE email=:email";

        self::$db->query($sql);

        self::$db->bind(":email", $email);
        self::$db->execute();

        return self::$db->singleResult();
    }
}