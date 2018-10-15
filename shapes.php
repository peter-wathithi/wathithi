<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02/10/2018
 * Time: 19:18
 */

class shapes
{
//properties assignment
    public $area;
    public $parameter;
    public $length;
    public $width;
    public $colour;


    public function getArea ($length,$width)
    {
        $area=$length*$width;
        echo $area;

        return $this->area;}

}
$rectangle= new shapes();
$rectangle->colour= 'yellow';
$rectangle->length=20;
$rectangle->width=10;
$rectangle->getArea( 20,10);

