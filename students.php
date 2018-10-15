<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05/10/2018
 * Time: 16:02
 */

class students
{
    public $firstname;
    private $lastname;

    public function __construct ($firstname, $lastname)
    {
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname ()
    {
        echo $this->firstname, '<br/>';
    }

    /**
     * @return mixed
     */
    public function getLastname ()
    {
        echo $this->lastname;
    }

    /**
     * @param string $fullname
     */
    public function setFullname ($fullname)
    {
        $this->fullname=$fullname;
    }

    /**
     * @return string
     */
    public function getFullname ()
    {
        echo $this->fullname, '<br/>';
        return 'the fullname' . $this->fullname;
    }
}


$student=new students('peter' , 'wathithi');
$student->getFirstname();
$student->getLastname();
$student->setFullname('fullname');
$student->getFullname();
