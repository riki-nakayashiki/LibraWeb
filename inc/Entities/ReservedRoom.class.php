<?php

class ReservedRoom {

    private int $id;
    private int $roomId;
    private int $userId;
    private string $roomName;
    private string $dateOfReserved;
    private string $startTime;
    private string $endTime;

	public function getId():int {
		return $this->id;
	}

    // private int $roomId;
	public function getRoomId():int {
		return $this->roomId;
	}

	public function setRoomId(int $roomId) {
		$this->roomId = $roomId;
	}

    // private int $userId;
	public function getUserId():int {
		return $this->userId;
	}

	public function setUserId(int $userId) {
		$this->userId = $userId;
	}

    // private string $roomName;
	public function getRoomName():string {
		return $this->roomName;
	}

	public function setRoomName(string $roomName) {
		$this->roomName = $roomName;
	}
    // private string $dateOfReserved;
	public function getDataOfReserved():string {
		return $this->dateOfReserved;
	}

	public function setDataOfReserved(string $dateOfReserved) {
		$this->dateOfReserved = $dateOfReserved;
	}
    // private string $startTime;
	public function getStartTime():string {
		return $this->startTime;
	}

	public function setStartTime(string $startTime) {
		$this->startTime = $startTime;
	}
    // private string $endTime;
	public function getEndTime():string {
		return $this->endTime;
	}

	public function setEndTime(string $endTime) {
		$this->endTime = $endTime;
	}

}