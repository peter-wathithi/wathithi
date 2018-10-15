<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/10/2018
 * Time: 16:42
 */

class rep
{
    public $gender;
    public $moral;
    public $grades;

    /**
     * @param mixed $moral
     */
    public function setMoral ($moral)
    {
        $this->moral=$moral;
    }

    /**
     * @return mixed
     */
    public function getMoral ()
    {
        echo 'The class rep should uphold good' . $this->moral;
        return $this->moral;
    }

    /**
     * @param mixed $grades
     */
    public function setGrades ($grades)
    {
        $this->grades=$grades;
    }

    /**
     * @return mixed
     */
    public function getGrades ()
    {
        echo 'The class rep should outmost have the best' . $this->grades;

        return $this->grades;
    }
}
    class student extends rep{
    private $respect;

        /**
         * @param mixed $respect
         */
        public function setRespect ($respect)
        {
            $this->respect=$respect;
        }

        /**
         * @return mixed
         */
        public function getRespect ()
        {echo 'the student should have high regards and high'.$this->respect;
            return $this->respect;
        }
    }
$peter=new rep;
$peter->setGrades('A+ in all classes');
$peter->getGrades();
$peter->setMoral('high standard morals');
$peter->getMoral();
$peter->setRespect('should have high respect towards others');
$peter->getRespect();




































