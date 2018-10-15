<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/10/2018
 * Time: 17:12
 */

class circle
{
    public $diameter;
    public $pi=3.14159265359;
    public $area;

    /**
     * @return mixed
     */
    public function getArea ($diameter,$pi)
    {$area=$diameter*$pi;
    echo $area;
        return $this->area;
    }
}

$circular= new circle();
$circular->diameter=48;
$circular->pi=3.14159265359;
$circular->getArea(48,3.14159265359);
?>