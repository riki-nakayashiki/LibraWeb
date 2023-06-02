<?php

class RoomDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("Room");
    }

    public static function insertRoom(Room $newRoom) {
        $sql = "INSERT INTO rooms(roomName,capacity,location) VALUES (:roomName,:capacity,:location)";

        self::$db->query($sql);

        self::$db->bind(":roomName",$newRoom->getRoomName());
        self::$db->bind(":capacity",$newRoom->getCapacity());
        self::$db->bind(":location",$newRoom->getLocation());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllRooms(){
        $sql = "SELECT * FROM rooms";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
    public static function deleteRoomById(int $Id) {
        $sql = "DELETE FROM rooms WHERE id = :id";

        self::$db->query($sql);
        self::$db->bind(":id", $Id);
        self::$db->execute();

        return self::$db->rowCount();
    }

    public static function updateRoomByName(Romm $room) {
        $sql = "UPDATE rooms SET status:status where roomName =:roomName ";

        self::$db->query($sql);

        self::$db->bind(":roomName", $room->getRoomName());
        // self::$db->bind(":roomName", $room->getRoomName());
        // self::$db->bind(":capacity", $room->getCapacity());
        // self::$db->bind(":location", $room->getLocation());
        // self::$db->bind(":purpose", $room->getPurpose());
        self::$db->bind(":status", $room->getStatus());
        self::$db->execute();
        return self::$db->lastInsertedId();
    }

    public static function getRoomByRoomName( string $roomName ) {
        $sql = "SELECT * FROM rooms WHERE roomName=:room";

        self::$db->query($sql);

        self::$db->bind(":room",$roomName);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function getRoomByPurpose(string $purpose) {
        $sql = "SELECT * FROM rooms WHERE purpose = :purpose";
        self::$db->query($sql);
        self::$db->bind(':purpose',$purpose);
        self::$db->execute();
        return self::$db->resultSet();
    }
}