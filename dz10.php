<?php
// header ("Content-Type: text/html; charset=utf-8");
// Начало ДЗ
interface InterfaceNameForProduct
{
    public function __construct ($name, $model, $category);
    // public function getDescribe();
}

class Product implements InterfaceNameForProduct //суперкласс
{
    protected $name;
    protected $model;
    protected $category;

    public function __construct ($name, $model, $category)
    {
        $this->name = $name;
        $this->category = $category;
        $this->model = $model;
    }
}
/**
 * Дочерний класс
 */
interface InterfaceNameForCar
{
    public function setSpeed($speed);
    public function setColor($color);
    public function getDescribe();
}

class Car extends Product implements InterfaceNameForCar
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
        echo "This car is {$this->name}, model - {$this->model}, from category {$this->category} has speed {$this->speed} km/h and color {$this->color}" . '<br />';
    }
}
/**
 * Эксплуатация кода
 */
$car1 = new Car('BMW', 6, 'Иномарка');
$car1->setSpeed(260)->setColor('Green');
$car1->getDescribe();

$car2 = new Car('VAZ', 2107, 'Отечественный автопром');
$car2->setSpeed(180)->setColor('White');
$car2->getDescribe();
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForTv
{
    public function changeColor($color);
    public function getDescribe();
}

class Tv extends Product implements InterfaceNameForTv //суперкласс
{
    protected $color = 'Black';
    protected $material = 'Plastic';

    public function changeColor($color)
    {
      $this->color = $color;
    }

    public function getDescribe()
    {
        echo "Телевизор {$this->name}, модель - {$this->model}, из категории - {$this->category}. Цвет ТВ: {$this->color}. Материал ТВ: {$this->material}. ". '<br />';
    }
}
/**
 * Эксплуатация кода
 */
$tv1 = new Tv('LG', 'LA860V', '42"');
$tv1->getDescribe();

$tv2 = new Tv('SAMSUNG', 'UE49M5000AK', '49"');
$tv2->changeColor('Grey');
$tv2->getDescribe();
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForPen
{
    public function getMaterial($material);
    public function getInk($ink);
    public function getColor($color);
    public function setColor ();
    public function getDescribe();
}

class Pen extends Product implements InterfaceNameForPen
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

    public function setColor ()
    {
        echo '"У меня есть цвет!" ';
    }

    public function getDescribe()
    {
        echo "Это {$this->name},  модель - {$this->model}, из категории - {$this->category}, материал изготовления - " . $this->material . ", чернила - " . $this->ink . ", цвет корпуса - " .  $this->color . '<br />';
    }
}
/**
 * Эксплуатация кода
 */
$pen1 = new Pen('Ручка', 'Аташе', 'шариковые ручки');
$pen1->getMaterial('пластик')->getInk('черные')->getColor = ('синий');
$pen1->getDescribe();
// echo $pen1->getDescribe() . '<br />';


$pen2 = new Pen('Ручка', 'Паркер', 'перьевые ручки');
$pen2->getMaterial('металл')->getInk('синие')->getColor = ('серый');
echo 'Вдруг резко крикнула: ';
$pen2->setColor();
$pen2->getDescribe();
/**
 *Интерфейс
 */
echo "<pre>";
interface InterfaceNameForDuck
{
    public function showConstant ();
    public function getAge ($age);
    public function getDescribe();

}

class Duck extends Product implements InterfaceNameForDuck//суперкласс
{
    const CONSTANT = 'Bird';
    protected $sex = 'Female';
    protected $age = 12;

    public function showConstant ()
    {
      echo self::CONSTANT;
    }

    public function getAge ($age)
    {
        if ($this->age < $age)
        {
          echo 'Утке осталось недолго :(, потому что ей ' .  $age. ' лет <br />';
        }
        else {
          echo 'Утка ещё молода! Ей всего ' .  $age. ' лет <br />';
      }
    }

    public function getDescribe()
    {
        echo 'Отряд - ' . Duck::CONSTANT . ". Это {$this->name},  вид - {$this->model}, из категории - {$this->category}, пол - {$this->sex}\n";
    }
}
/**
 * Эксплуатация кода
 */
$duck1 = new Duck('Утка', 'Кряква', 'Речная');
$duck1->getDescribe();
$duck1->getAge(13);


$duck2 = new Duck('Утка', 'Мандаринка', 'Декоративная');
$duck2->getDescribe();
$duck2->getAge(5);

echo "<pre>";

/**
 * Дочерний класс
 */
interface InterfaceNameForProductClass
{
    public function setCopybook($pages);
    public function setCup($volume);
    public function getDescribe();
}

final class ProductClass extends Product implements InterfaceNameForProductClass
{
    protected $pages;
    protected $volume;
    protected $material;

    public function getMaterial($material)
    {
        $this->material = $material;
        return $this;
    }

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
        echo "Это {$this->name}, модель - {$this->model}, из категории - {$this->category}, сделана из материала {$this->material}. ";

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
$product1 = new ProductClass('Тетрадь', 'в клетку', 'Канцелярка');
$product1->getMaterial('Бумага')->setCopybook(100);
$product1->getDescribe();

$product2 = new ProductClass('Чашка', 'чайная', 'Посуда');
$product2->getMaterial('Керамика')->setCup(300);
$product2->getDescribe();
 ?>
