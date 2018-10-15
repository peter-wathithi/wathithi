<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/10/2018
 * Time: 18:28
 */

abstract class mat
{
    protected $colour;
    protected $cost;

    /*final*/
   abstract public function welcomeClient ();





}

class dormant extends mat
{
    public function welcomeClient ()
    {
        echo 'welcome customer';

    }




}

$matone=new dormant();
$matone->welcomeClient();
