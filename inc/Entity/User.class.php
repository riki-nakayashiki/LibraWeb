<?php

class User
{
	private int $id;
	private string $firstName;
	private string $lastName;
	private string $address;
	private int $age;
	private string $email;
	private string $password;
	private string $userType;

	//Verify the password
	function verifyPassword(string $passwordToVerify): bool
	{
		return password_verify($passwordToVerify, $this->getPassword());
	}

	/**
	 * @return 
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param  $id 
	 * @return self
	 */
	public function setId(int $id): self
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getFirstName(): string
	{
		return $this->firstName;
	}

	/**
	 * @param  $firstName 
	 * @return self
	 */
	public function setFirstName(string $firstName): self
	{
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getLastName(): string
	{
		return $this->lastName;
	}

	/**
	 * @param  $lastName 
	 * @return self
	 */
	public function setLastName(string $lastName): self
	{
		$this->lastName = $lastName;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getAddress(): string
	{
		return $this->address;
	}

	/**
	 * @param  $address 
	 * @return self
	 */
	public function setAddress(string $address): self
	{
		$this->address = $address;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getAge(): int
	{
		return $this->age;
	}

	/**
	 * @param  $age 
	 * @return self
	 */
	public function setAge(int $age): self
	{
		$this->age = $age;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param  $email 
	 * @return self
	 */
	public function setEmail(string $email): self
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getPassword(): string
	{
		return $this->password;
	}

	/**
	 * @param  $password 
	 * @return self
	 */
	public function setPassword(string $password): self
	{
		$this->password = $password;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getUserType(): string
	{
		return $this->userType;
	}

	/**
	 * @param  $userType 
	 * @return self
	 */
	public function setUserType(string $userType): self
	{
		$this->userType = $userType;
		return $this;
	}
}