<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09/10/2018
 * Time: 18:11
 */

interface  car
{
    public function setModel ($model);

    public function getModel ();

}
interface vehicle
{
    public function setHasWheels  ($haswheels);

    public function getHasWheel ();

}

class minicar implements car
{private $model;
public function setModel ($model)
{$this->model=$model;
    // TODO: Implement setModel() method.
}

    /**
     * @return mixed
     */
    public function getModel ()
    {   echo 'The model of the car is '.$this->model;
        return $this->model;
    }

    public function setHasWheels ($haswheels)

    {
        $this->haswheels=$haswheels;
    }

    public function getHasWheel  ()
    {
        echo $this->haswheels?' has wheels ':' no wheels ';'<b/>';
    }

}
$BMW=new minicar();
$BMW->setModel('mercedez');
$BMW->getModel();
$BMW->setHasWheels(' has wheels ');
$BMW->getHasWheel();