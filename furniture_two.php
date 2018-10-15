<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/10/2018
 * Time: 19:13
 */

class furniture_two
{
    private $cost;

    /**
     * @return mixed
     */
    public function setCost ($cost)
    {
        echo $this->cost=$cost;


    }

    public function getCost ()
    {
        echo 'The cost of the furniture is '.$this->cost;

    }
}
    /**
     * @param mixed $cost
     */

$funiture_two= new furniture_two();
$funiture_two->setcost('60000');
$funiture_two->getcost();

