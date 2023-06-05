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

    public static function updateRoomStatus($room) {
        $sql = "UPDATE rooms SET status = :status WHERE id = :id";

        self::$db->query($sql);
        self::$db->bind(":id", $room);
        self::$db->bind(":status", true);
        self::$db->execute();
        return self::$db->lastInsertedId();
    }

    public static function getRoomById( int $id ) {
        $sql = "SELECT * FROM rooms WHERE id=:id";

        self::$db->query($sql);

        self::$db->bind(":id",$id);
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
    // RoomDAO class

    public static function getStatus($roomId) {
        $pdo = PDOService::getConnection();

        $query = "SELECT status FROM rooms WHERE id = :roomId";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':roomId', $roomId, PDO::PARAM_INT);
        $stmt->execute();

        $status = $stmt->fetchColumn();

        return $status;
    }

}