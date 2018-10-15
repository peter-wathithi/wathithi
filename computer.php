<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11/10/2018
 * Time: 17:07
 */

interface  computer
{
    public function setModel ($model);

    public function getModel ();

}

interface desktop
{
    public function setMemory ($memory);

    public function getMemory ();

}

interface colour
{
    public function setColour ($colour);

    public function getColour ();

}

class laptop implements computer, desktop, colour
{
    public function setModel ($model)
    {
        $this->model=$model;
        // TODO: Implement setModel() method.
    }

    public function getModel ()
    {
        echo 'The model of the computer is ' . $this->model;
        return $this->model;
        // TODO: Implement getModel() method.
    }

    public function setMemory ($memory)
    {
        $this->memory=$memory;
        // TODO: Implement setMemory() method.
    }

    public function getMemory ()
    {
        echo ' and your memory is  ' . $this->memory;
        // TODO: Implement getMemory() method.

    }



    public function setColour ($colour)
    {
        $this->colour=$colour;
        // TODO: Implement setColour() method.
    }

    public function getColour ()
    {
        echo ' how ever the colour of your laptop is ' . $this->colour;
        // TODO: Implement getColour() method.
    }

}

$dell=new laptop();
$dell->setModel(' DELL ');
$dell->getModel();
$dell->setMemory('1000 GB ');
$dell->getMemory();
$dell->setColour(' Purple ');
$dell->getColour();

