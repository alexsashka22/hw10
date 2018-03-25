<?php
header ("Content-Type: text/html; charset=utf-8");
// Начало ДЗ
/**
 *Интерфейс
 */
interface InterfaceNameForCar
{
  public function __construct($name, $model);
}

class Car implements InterfaceNameForCar //суперкласс
 {
    protected $name;
    protected $model;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }
}
/**
 * Дочерний класс
 */
 interface InterfaceNameForCarModel
 {
    public function setSpeed($speed);
    public function setColor($color);
    public function getDescribe();
 }

class CarModel extends Car implements InterfaceNameForCarModel
 {
    protected $speed;
    protected $color;

    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    public function getDescribe()
    {
        return "This car is {$this->name}, model - {$this->model}, has speed {$this->speed} km/h and color {$this->color}";
    }
}
/**
 * Эксплуатация кода
 */
$car1 = new CarModel('BMW', 6);
$car1->setSpeed(260)->setColor('Green');
$car1->getDescribe();
echo $car1->getDescribe() . '<br />';

$car2 = new CarModel('VAZ', 2107);
$car2->setSpeed(180)->setColor('White');
$car2->getDescribe();
echo $car2->getDescribe() . '<br />';
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForTv
{
  public function changeColor($color);
  public function getDescription();
}

class Tv implements InterfaceNameForTv //суперкласс
{
    protected $color = 'Black';
    protected $material = 'Plastic';

    public function changeColor($color)
    {
      $this->color = $color;
    }

    public function getDescription()
    {
        echo "Цвет ТВ: {$this->color}. ";
        echo "Материал ТВ: {$this->material}. ";
    }
}
/**
 * Дочерний класс
 */
 interface InterfaceNameForTvClass
 {
   public function __construct($name);
   public function getDescription();
 }

class TvClass extends TV implements InterfaceNameForTvClass
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        parent::getDescription();
        echo "Модель ТВ: {$this->name}" . '<br />';
    }
}
/**
 * Эксплуатация кода
 */
$tv1 = new TvClass('LG');
$tv1->getDescription();

$tv2 = new TvClass('SAMSUNG');
$tv2->changeColor('Grey');
$tv2->getDescription();
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForPenClass
{
    public function describe();
    public function setColor ();
}

class PenClass implements InterfaceNameForPenClass//суперкласс
{
    public $name = 'ручка';

    public function setColor ()
    {
        echo '"У меня есть цвет!"' . '<br/>';
    }
    public function describe()
    {
        return "Это " . $this->name . ", материал изготовления - " . $this->material . ", чернила - " . $this->ink . ", цвет корпуса - " .  $this->color;
    }
}
/**
 * Дочерний класс
 */
interface InterfaceNameForPen
{
  public function getMaterial($material);
  public function getInk($ink);
  public function getColor($color);
}

final class Pen extends PenClass implements InterfaceNameForPen
{
    protected $material = "пластик";
    protected $ink = "черные";
    protected $color = "синий";

    public function getMaterial($material)
    {
      $this->material = $material;
      return $this;
    }

    public function getInk($ink)
    {
      $this->ink = $ink;
      return $this;
    }

    public function getColor($color)
    {
      $this->color = $color;
      return $this;
    }
}
/**
 * Эксплуатация кода
 */
$pen1 = new Pen();
$pen1->getMaterial('пластик')->getInk('черные')->getColor = ('синий');
$pen1->describe();
echo $pen1->describe() . '<br />';


$pen2 = new Pen();
$pen2->getMaterial('металл')->getInk('синие')->getColor = ('серый');
$pen2->describe();
echo $pen2->describe() . ', вдруг резко крикнула: ';
$pen2->setColor();
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForBird
{
    public function describe();
    public function showConstant ();
}

class Bird implements InterfaceNameForBird//суперкласс
{
    const CONSTANT = 'Bird';
    protected $sex = 'Female';

    public function showConstant ()
    {
      echo self::CONSTANT;
    }

    public function describe()
    {
        echo "Тип живого существа - " . Duck::CONSTANT;
        echo '; пол - ' . $this->sex . ';' . '<br />';
    }
}
/**
 * Дочерний класс
 */
 interface InterfaceNameForBirdDuck
 {
     public function __construct ($age);
 }

final class Duck extends Bird implements InterfaceNameForBirdDuck
{
    protected $age = 12;

    public function __construct ($age)
    {
        if ($this->age < $age)
        {
          echo 'Утке осталось недолго :(, потому что ей ' .  $age. ' лет <br />';
        }
        else {
          echo 'Утка ещё молода! Ей всего ' .  $age. ' лет <br />';
      }
    }
}
/**
 * Эксплуатация кода
 */
$duck1 = new Duck(13);
$duck1->describe();

$duck2 = new Duck(5);
$duck2->describe();

echo "<pre>";
/**
 * Интерфейс
 */
interface InterfaceNameForProductClass
{
  public function __construct ($name, $category, $material);
  public function getDescribe();
}

class ProductClass implements InterfaceNameForProductClass //суперкласс
{
    protected $name;
    protected $category;
    protected $material;

    public function __construct ($name, $category, $material)
    {
      $this->name = $name;
      $this->category = $category;
      $this->material = $material;
    }

    public function getDescribe()
    {
      echo "Это {$this->name}, из категории - {$this->category}, сделана из материала {$this->material}. ";
    }
}
/**
 * Дочерний класс
 */
 interface InterfaceNameForProductClassProduct
 {
   public function setCopybook($pages);
   public function setCup($volume);
   public function getDescribe();
 }
final class Product extends ProductClass implements InterfaceNameForProductClassProduct
{
  protected $pages;
  protected $volume;

  public function setCopybook($pages)
  {
      $this->pages = $pages;
      return $this;
  }
  public function setCup($volume)
  {
      $this->volume = $volume;
      return $this;
  }

  public function getDescribe()
  {
      parent::getDescribe();
      if ($this->name == 'Тетрадь') {
        echo "Коичество страниц - {$this->pages}\n";
      } else {
        echo "Объём - {$this->volume} мл\n";
      }
  }
}
/**
 * Эксплуатация кода
 */
$product1 = new Product('Тетрадь', 'Канцелярка', 'Бумага');
$product1->setCopybook(100);
$product1->getDescribe();

$product2 = new Product('Чашка', 'Посуда', 'Керамика');
$product2->setCup(300);
$product2->getDescribe();
 ?>
