<?php

class Room {

    private int $id;
    private string $roomName;
    private int $capacity;
    private string $location;
	private string $purpose;
	private string $date;
	private string $startTime;
	private string $endTime;
	private bool $status;

	public function getId():int {
		return $this->id;
	}

    // private string $roomName;
	public function getRoomName():string {
		return $this->roomName;
	}

	public function setRoomName(string $roomName) {
		$this->roomName = $roomName;
	}

    // private int $capacity;
	public function getCapacity():string {
		return $this->capacity;
	}

	public function setCapacity(string $capacity) {
		$this->capacity = $capacity;
	}

    // private string $location;
	public function getLocation():string {
		return $this->location;
	}

	public function setLocation(string $location) {
		$this->location = $location;
	}
    // private string $purpose;
	public function getPurpose():string {
		return $this->purpose;
	}

	public function setPurpose(string $purpose) {
		$this->purpose = $purpose;
	}
    // private string $date;
	public function getDate():string {
		return $this->date;
	}

	public function setDate(string $date) {
		$this->date = $date;
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
    // private bool $status;
	public function getStatus():bool {
		return $this->status;
	}

	public function setStatus(bool $status) {
		$this->status = $status;
	}



}