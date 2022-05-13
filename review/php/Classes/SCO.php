<?php
class Circle{
    const pi= 3.14;
    public $side=5;
    function area(){
        $area = $this->side**2*self::pi;
        return $area;
    }
}
$result = new Circle();
echo "Pi=" .Circle::pi;
echo "Area=". $result->area();