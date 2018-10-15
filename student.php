<?php
class student
{
    public $name;
    public $gender;
    public $age;
    public $row;
    public $column;
    public $class;

    /**
     *
     */
    /**
     * @param mixed $name
     */
    public function setName ($name)
    { var_dump($this);
        $this->name=$name;
    }

    /**
     * @param mixed $gender
     */
    public function setGender ($gender)
    { var_dump($this);
        $this->gender=$gender;
    }

    /**
     * @param mixed $age
     */
    public function setAge ($age)
    { var_dump($this);
        $this->age=$age;
    }

    /**
     * @param mixed $row
     */
    public function setRow ($row)
    { var_dump($this);
        $this->row=$row;
    }

    /**
     * @param mixed $column
     */
    public function setColumn ($column)
    { var_dump($this);
        $this->column=$column;
    }

    /**
     * @param mixed $class
     */
    public function setClass ($class)
    { var_dump($this);
        $this->class=$class;
    }

    /**
     * @return mixed
     */
    public function getAge ()
    {
        echo $this->age;
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        echo $this->name;
    }

    /**
     * @return mixed
     */
    public function getClass ()
    {
        echo $this->class;
    }

    /**
     * @return mixed
     */
    public function getColumn ()
    {
        echo $this->column;
    }

    /**
     * @return mixed
     */
    public function getRow ()
    {
        echo $this->row;
    }

    /**
     * @return mixed
     */
    public function getGender ()
    {
        echo $this->gender;
    }
}
$student_array= [


        ["name"=>"peter", "gender"=>"male", "age"=>"20", "row"=>"1", "column"=>"12", "class"=>"evening"],


        ["name"=>"jane", "gender"=>"female", "age"=>"19", "row"=>"2", "column"=>"2", "class"=>"evening"],

        ];


$value= new student();
$value->setName('peter ');
$value->getName();
$value->setAge(' 19 ');
$value->getAge();
$value->setRow(' 12 ');
$value->getRow();
$value->setColumn(' 10 ');
$value->getColumn();
$value->setGender(' male ');
$value->getGender();
$value->setClass(' evening ');
$value->getClass();


?>

