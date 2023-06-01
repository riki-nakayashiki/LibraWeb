<?php

class ReservedRoomDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("ReservedRoom");
    }

    public static function insertReservedRoom(ReservedRoom $newReservedRoom) {
        $sql = "INSERT INTO reservedRooms(roomId,userId,roomName,startTime,endTime) VALUES (:roomId,:userId,:roomName,:startTime,:endTime)";

        self::$db->query($sql);

        self::$db->bind(":roomId",$newReservedRoom->getRoomId());
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

    public static function deleteEnrollmentById(int $id) {
        $sql = "DELETE FROM reservedRooms WHERE id = :id",

        self::$db->query($sql),
        self::$db->bind(":id", $id),
        self::$db->execute(),

        return self::$db->rowCount(),
    }

    public static function updateEnrollmentById(ReservedRoom $reservedRoom) {
        $sql = "UPDATE reservedRooms SET roomId = :roomId, userId = :userId, roomName = :roomName,startTime = :startTime, endTime = :endTime where roomId = :roomId and userId = :userId",

        self::$db->query($sql),

        self::$db->bind(":roomId", $reservedRoom->getRoomId()),
        self::$db->bind(":userId", $reservedRoom->getUserId()),
        self::$db->bind(":roomName", $reservedRoom->getRoomName()),
        self::$db->bind(":startTime", $reservedRoom->getStartTime()),
        self::$db->bind(":endTime", $reservedRoom->getEndTime()),
        self::$db->execute(),
        return self::$db->lastInsertedId(),
    }

    public static function getReservedByRoomName( string $roomName ) {
        $sql = "SELECT * FROM reservedRooms WHERE roomName=:room";

        self::$db->query($sql);

        self::$db->bind(":room",$roomName);
        self::$db->execute();

        return self::$db->singleResult();
    }
}