<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02/10/2018
 * Time: 18:42
 */

class flower
{
    public $roses;
    public $colour;
    public $petals;

    /**
     * @param mixed $petals
     */
    public function setPetals ($petals)
    {
        $this->petals=$petals;
    }

    /**
     * @return mixed
     */
    public function getPetals ()
    {echo'This flower has how many petals '.$this->petals;
        return $this->petals;
    }

    /**
     * @param mixed $roses
     */
    public function setRoses ($roses)
    {
        $this->roses=$roses;
    }

    /**
     * @return mixed
     */
    public function getRoses ()
    {echo ' this is a rose'.$this->roses;
    if (!$this->roses)
        echo 'this is not a rose '.$this->roses;
        return $this->roses;
    }

}
$sunflower=new flower();
$sunflower->setPetals(' 12 petals ');
$sunflower->getPetals();
$sunflower->setRoses(' sunflower ');
$sunflower->getRoses();