<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/10/2018
 * Time: 02:34
 */

class fruit
{
    public $type;
    public $colour;
    public $price;
    public $is_juicy;

    /**
     * @param mixed $colour
     */
    public function setColour ($colour)
    {
        $this->colour=$colour;
    }

    /**
     * @param mixed $price
     */
    public function setPrice ($price)
    {
        $this->price=$price;
    }

    /**
     * @param mixed $type
     */
    public function setType ($type)
    {
        $this->type=$type;
    }

    /**
     * @param mixed $is_juicy
     */
    public function setIsJuicy ($is_juicy)
    {
        $this->is_juicy=$is_juicy;
    }
    public function getFruit ($type, $color, $price, $is_juicy)
    {
        echo "FRUIT TYPE " . $this->type;

        echo "FRUIT COLOUR " . $this->colour;

        echo "PRICE " . $this->price;

        echo "IS JUICY " . $this->is_juicy;

    }


}

$fruit=[
    ["type"=>"tropical", "colour"=>"green/yellow", "price"=>"200", "is juicy"=>"true"],
    ["type"=>"citrus", "colour"=>"green/yellow", "price"=>"200", "is juicy"=>"true"],
    ["type"=>"citrus", "colour"=>"green/yellow", "price"=>"200", "is juicy"=>"false"],
    ["type"=>"berries", "colour"=>"red/blackis", "price"=>"200", "is juicy"=>"true"],
];

foreach ($fruit as $item) ;
{
    echo "is" . $this->colour;
}

$item=new fruit(mango);
$item->setColour('green/yellow ');
$item->getColour();
$item->setType('tropical');
$item->getType();
$item->setPrice('ksh100');
$item->getPrice();
$item->setIsJuicy('is juicy');
$item->getIsjuicy();
$item->getFruit();
?>


