<?php 
/*
ÖDEV AÇIKLAMASI
•	Taşıtlarla ilgili bir sınıf oluşturulmalıdır. Oluşturulan bu sınıfta aşağıdaki öznitelikler bulunmalıdır.
plakaNo, marka, model, tekerlekSayisi, kanatAcikligi
•	Taşıtılara alternatif olarak üç tane sınıf oluşturulmalıdır:
araba, motorsiklet, uçak
•	Oluşturulan bu sınıflara yukarıda tanımlanan öznitelikler (property) değer olarak girilmeli, aşağıdaki gibi ekrana bastırabilmelidir:

*/

abstract class Vehicle
{
	public $make;
	public $model;
	
	function __construct($make,$model)
    {
        $this->make = $make;
        $this->model = $model;
    }
}

class Car extends Vehicle
{
    protected $plate;
    protected $wheels;   
    function __construct($make,$model,$plate,$wheels)
    {
        parent::__construct($make,$model,$plate,$wheels);
		$this->plate = $plate;
        $this->wheels = $wheels;
    }

    function printInfo()
    {
        echo "Attributes of the <strong>Car</strong> vehicle <br/>
		<strong>Make:</strong> $this->make <br/>
		<strong>Model:</strong> $this->model <br/>
		<strong>Plate:</strong> $this->plate <br/>
		<strong>Number of Wheels:</strong> $this->wheels <br/>
		";
    }
}


class Motorcycle extends Car
{
	function __construct($make,$model,$plate,$wheels)
    {
        parent::__construct($make,$model,$plate,$wheels);
    }
	
	function printInfo()
    {
        echo "
		<br/>
		Attributes of the <strong>Motorcycle</strong> vehicle <br/>
		<strong>Make:</strong> $this->make <br/>
		<strong>Model:</strong> $this->model <br/>
		<strong>Plate:</strong> $this->plate <br/>
		<strong>Number of Wheels:</strong> $this->wheels <br/>
		";
    }
}


class Plane extends Vehicle
{
    private $wingSpan;//Kanat Açıklığı
    
    function __construct($make,$model,$wingSpan)
    {
        parent::__construct($make,$model,$wingSpan);
		$this->wingSpan= $wingSpan;
    }

    function printInfo()
    {
        echo "
		<br/>
		Attributes of the <strong>Plain</strong> vehicle <br/>
		<strong>Make:</strong> $this->make <br/>
		<strong>Model:</strong> $this->model <br/>
		<strong>Wing Span:</strong> $this->wingSpan <br/>
		";
    }
}



$car=new Car("BMW","i8","59 TR 59",4);
$car->printInfo();

$moto=new Motorcycle("Ducati","Panigale","59 TR 59",2);
$moto->printInfo();

$plane=new Plane("Airbus","A380","500 M");
$plane->printInfo();





?>