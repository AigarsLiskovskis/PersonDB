<?php


namespace App;

use Doctrine\DBAL\Exception;

class Controller extends DbHandler
{
    /**
     * @throws Exception
     */
    public function joinPerson($firstName, $lastName, $personsCode)
    {
        $this->connect()->insert('persons',
            array('first_name' => "$firstName",'last_name' => "$lastName",'persons_code' => "$personsCode"));
    }
}
