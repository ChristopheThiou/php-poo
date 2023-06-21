<?php

namespace App\Example;

class Person extends Animal {
    private string $lastName;

    public function __construct(string $lastName) {
        $this->lastName = $lastName;
    }
    public function speak() {
        echo "It's me {$this->lastName}";
    }

	/**
	 * @return string
	 */
	public function getLastName(): string {
		return $this->lastName;
	}
	
	/**
	 * @param string $lastName 
	 * @return self
	 */
	public function setLastName(string $lastName): self {
		$this->lastName = $lastName;
		return $this;
	}
	public function toHTML():string {
		return "<div>{$this->name} {$this->lastName}</div>";
	}
}