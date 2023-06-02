<?php

class ReservedRoomDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("ReservedRoom");
    }

    public static function insertReservedRoom(ReservedRoom $newReservedRoom) {
        $sql = "INSERT INTO reservedRooms(userId,roomName,startTime,endTime) VALUES (:userId,:roomName,:startTime,:endTime)";

        self::$db->query($sql);

        self::$db->bind(":userId",$newReservedRoom->getUserId());
        self::$db->bind(":roomName",$newReservedRoom->getRoomName());
        self::$db->bind(":startTime",$newReservedRoom->getStartTime());
        self::$db->bind(":endTime",$newReservedRoom->getEndTime());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllReservedRooms(){
        $sql = "SELECT * FROM reservedRooms";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function deleteEnrollmentById(ReservedRoom $newReservedRoom) {
        $sql = "DELETE FROM reservedRooms WHERE userId = :id and roomName = :roomName";

        self::$db->query($sql);
        self::$db->bind(":id", $newReservedRoom->getUserId());
        self::$db->bind(":roomName", $newReservedRoom->getRoomName());
        self::$db->execute();

        return self::$db->rowCount();
    }

    public static function updateResevationById($roomId,ReservedRoom $reservedRoom, User $user) {
        $sql = "UPDATE reservedRooms SET userId = :userId, roomName = :roomName,startTime = :startTime, endTime = :endTime where roomName = :roomName and userId = :userId";

        self::$db->query($sql);
        self::$db->bind(":userId", $user->getUserId());
        self::$db->bind(":roomName", $reservedRoom->getRoomName());
        self::$db->bind(":startTime", $reservedRoom->getStartTime());
        self::$db->bind(":endTime", $reservedRoom->getEndTime());
        self::$db->execute();
        return self::$db->lastInsertedId();
    }
    // left join the reservation with rooms 
    public static function joinReservation(ReservedRoom $reservedRoom, User $user) {
        $sql = "SELECT * FROM reservedRooms left join users on reservedRooms.userId = users.id  WHERE reservedRooms.userId =:userid";

        self::$db->query($sql);
        self::$db->bind(":userId", $reservedRoom->getUserId());
        self::$db->execute();
        return self::$db->lastInsertedId();
    }

    public static function getReservedByRoomName( string $roomName ) {
        $sql = "SELECT * FROM reservedRooms WHERE roomName=:room";

        self::$db->query($sql);

        self::$db->bind(":room",$roomName);
        self::$db->execute();

        return self::$db->singleResult();
    }
}