<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09/10/2018
 * Time: 16:10
 */

abstract class student_two
{
    protected $gender;
    protected $name;


    abstract public function myName ();
    abstract public function myGender ();



}

class classrep extends student_two
{ public function myName ()
  {echo 'my name is Peter Wayne'.'<br/>';
    // TODO: Implement myName() method.

  }
    public function myGender ()
    {echo 'my gender is male'.'<br/>';
        // TODO: Implement myGender() method.
    }
}
class departmentrep extends classrep
{public function myGender ()
   {echo 'my gender is male'.'<br/>';
    // TODO: Implement myGender() method.
   }


}
$peter=new departmentrep();
$peter->myName();
$peter->myGender();