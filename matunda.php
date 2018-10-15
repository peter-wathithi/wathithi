<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/10/2018
 * Time: 17:09
 */

class matunda
{public $mango;
 private $apple;
 protected $pineapple;

    /**
     * @param mixed $mango
     */
    public function setMango ($mango)
    {
        $this->mango=$mango;
    }    /**
     * @return mixed
     */
    public function getMango ()
    {echo 'it is a torpical fruit which is green/yellow in colour when ripe'.$this->mango;
        return $this->mango;
    }


}
class fruits extends matunda{

    public $grapes;

    /**
     * @param mixed $grapes
     */
    public function setGrapes ($grapes)
    {
        $this->grapes=$grapes;
    }

    /**
     * @return mixed
     */
    public function getGrapes ()
    {
        echo 'they are in the fruit class berries which is black/red in colour' . $this->grapes;
        return $this->grapes;
    }






}
$fruit=new matunda();
$fruit->setMango('ripe when yellow/red');
$fruit->getMango();