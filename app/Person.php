<?php


namespace App;

use Doctrine\DBAL\Exception;

class Person extends Controller
{
    private string $firstName;
    private string $lastName;
    private string $personsCode;

    public function __construct(string $firstName, string $lastName, string $personsCode)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->personsCode = $personsCode;
    }

    /**
     * @throws Exception
     */
    public function addPerson()
    {
        $this->joinPerson($this->firstName, $this->lastName, $this->personsCode);
    }
}

