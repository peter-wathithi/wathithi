<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05/10/2018
 * Time: 18:50
 */

class laptops
{
    private $brand;
    private $colour;
    private $os;

    /**
     * @return mixed
     */
    public function getBrand ()
    {
        echo 'the brand is' . $this->brand;
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand ($brand)
    {
        $this->brand=$brand;
    }

}

class macbook extends laptops
{private $memory;
 private $system_type;

    /**
     * @param mixed $memory
     */
    public function setMemory ($memory)
    {
        $this->memory=$memory;
    }

    public function getMemoty ()

    {echo'The memory is'.$this->memory;

    }

    public function setColour ($colour)

    {
        $this->Colour=$colour;

    }

    public function getColour ()
    {
        echo 'your laptops colour'.$this->Colour;
    }
}

$child_laptop=new macbook();
$child_laptop->setBrand('macbook laptop');
$child_laptop->getBrand();
$child_laptop->setMemory('500gb');
$child_laptop->getMemoty();
$child_laptop->setColour('yellow');
$child_laptop->getColour();