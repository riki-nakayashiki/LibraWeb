<?php

class ReservedRoom {
    private int $id;
    private int $roomId;
    private int $userId;
    private string $roomName;
    private string $dateOfReserved;
    private string $date;
    private string $startTime;
    private string $endTime;

    public function getId(): int {
        return $this->id;
    }

    public function getRoomId(): int {
        return $this->roomId;
    }

    public function setRoomId(int $roomId) {
        $this->roomId = $roomId;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function setUserId(int $userId) {
        $this->userId = $userId;
    }

    public function getRoomName(): string {
        return $this->roomName;
    }

    public function setRoomName(string $roomName) {
        $this->roomName = $roomName;
    }

    public function getDateOfReserved(): string {
        return $this->dateOfReserved;
    }

    public function setDateOfReserved(string $dateOfReserved) {
        $this->dateOfReserved = $dateOfReserved;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function setDate(string $date) {
        $this->date = $date;
    }

    public function getStartTime(): string {
        return $this->startTime;
    }

    public function setStartTime(string $startTime) {
        $this->startTime = $startTime;
    }

    public function getEndTime(): string {
        return $this->endTime;
    }

    public function setEndTime(string $endTime) {
        $this->endTime = $endTime;
    }
}
