<?php
class Person
{
    public $name = 'Bob';
    public $age = 20;
    public $hobby = 'swimming';
    public $isMarried = false;

    public function __construct($name, $age, $hobby, $isMarried)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
        $this->isMarried = $isMarried;
    }

}

$person = new Person('Danil', 20, 'gym', false);

echo $person->name;



// домашка
class FirstTochka
{
    public $pomidor;
    public $ogyrec;
    public $ketchup;

    public function __construct($pomidor, $ogyrec, $ketchup)
    {
        $this->pomidor = $pomidor;
        $this->ogyrec = $ogyrec;
        $this->ketchup = $ketchup;
    }
}

$firstTochka = new FirstTochka('rozovii','green', 'torchin');

echo $firstTochka->ketchup;

class SecondTochka
{
    public $products = [
      'ogyrec' => 'green',
      'pomidor' => 'red',
      'salat' => 'green',
      'paprika' => 'red'
    ];

    public function __construct($ogyrec, $pomidor, $salat, $paprika)
    {
        $this->products['ogyrec'] = $ogyrec;
        $this->products['pomidor'] = $pomidor;
        $this->products['salat'] = $salat;
        $this->products['paprika'] = $paprika;
    }
}
$secondTochka = new SecondTochka('47 grn', '38 grn', '10 grn', '5 grn');

echo $secondTochka->products['ogyrec'];