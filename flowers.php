<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/10/2018
 * Time: 19:34
 */

class flowers
{
    private  $scent;
    public  function  __construct ($scent)
    {
        $this->scent=$scent;
    }

    /**
     * @param mixed $scent
     */
    public function setScent ($scent)
    {
        $this->scent=$scent;
    }

    /**
     * @return mixed
     */
    public function getScent ()
    {echo $this->scent;

        return'the scent'.$this->scent;


    }
}

$rose= new flowers();
$rose->setScent('lovely');
$rose->getScent();