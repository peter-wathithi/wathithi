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
    public function getStudent ($name,$gender,$age,$row,$Column,$class)
    {echo "STUDENT NAME:".$this->name;'<br/>';
     echo "GENDER:".$this->gender;'<br/>';
     echo "AGE".$this->age;'<br/>';
     echo "ROW".$this->row;'<br/>';
     echo "COLUMN".$this->column;'<br/>';
     echo "CLASS".$this->class;'<br/>';
     return $this->name.$this->gender.$this->age.$this->row.$this->column.$this->class;
    }
}
$student_array= [


        ["name"=>"peter", "gender"=>"male", "age"=>"20", "row"=>"1", "column"=>"12", "class"=>"evening"],


        ["name"=>"jane", "gender"=>"female", "age"=>"19", "row"=>"2", "column"=>"2", "class"=>"evening"],

        ];


foreach ($student_array as $value);
{echo $student_array.'is'.$value;

}
$value= new student();
$value ->getStudent;



?>

