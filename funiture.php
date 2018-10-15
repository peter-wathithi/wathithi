<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/10/2018
 * Time: 18:26
 */

class funiture
{public $name;
public $colour;
#private$cost;
    public function getFunitureDescription ()
    {echo 'the funiture name is '.$this->name.' table '.$this->colour.' in colour,and it costs '.$this->cost;

}

}
$funiture_one= new funiture();
$funiture_one->cost=2500;
$funiture_one->colour='brown';
echo $funiture_one->getFunitureDescription();
echo $funiture_one->name;
echo $funiture_one->colour;
echo $funiture_one->cost;

class funiture_one extends funiture
{
    private $cost;

    /**
     * @return mixed
     */
    public function setCost ($cost)
    {
        $this->cost=$cost;

    }

    public function getcost ()
    {echo 'it cost'.$this->cost;
        return $this->cost;


    }
}
$funiture_two= new funiture_one();
$funiture_two->setcost('40000');
$funiture_two->getcost();