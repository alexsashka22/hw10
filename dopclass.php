<?php
interface InterfaceNameForProduct
{
  public function __construct ($name, $price);
  public function getPrice();
  public function setDelivery();
  public function getDescribe();
}

abstract class Paintigs implements InterfaceNameForProduct
{
  protected $name; //название
  protected $price;  // цена
  protected $delivery = 250; //доставка
  public $discount = 10; //скидка

  public function __construct ($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getPrice()
  {
    if ($this->discount) {
      return round($this->price - ($this->price / 100 * $this->discount));
    } else {
      return $this->price;
    }
  }

  public function setDelivery()
  {
    if ($this->discount != 0) {
      $this->delivery = 300;
    }
  }

  abstract public function getDescribe();
}

trait ChangePrice
{
  public function setDiscount($priceDiscount)
  {
    $priceDiscount = ($weight > 10) ? $this->discount : 0 ;
    // $this->priceDiscount = $priceDiscount;
  }
}

/**
 *Первый тип продуктов
 */
class PaintigL extends Paintigs
{
  protected $size = '180 x 560 см';

  public function getDescribe()
  {
    if ($this->discount != 0) {
      echo "Это картина {$this->name}, имеет размер - {$this->size}, идёт по акции со скидкой {$this->discount}. Итоговая цена {$this->getPrice()} руб. Дополнительно будет оплачиваться доставка в размере $this->delivery руб\n";
    } else {
      echo "Это картина {$this->name}, имеет размер - {$this->size}. Цена {$this->getPrice()} руб. Дополнительно будет оплачиваться доставка в размере $this->delivery руб\n";
    }
  }
}
/**
 *Второй тип продуктов
 */
class PaintigM extends Paintigs
{

  protected $size = '360 x 120 см';

  public function getDescribe()
  {
    if ($this->discount != 0) {
      echo "Это картина {$this->name}, имеет размер - {$this->size}, идёт по акции со скидкой {$this->discount}. Итоговая цена {$this->getPrice()} руб. Дополнительно будет оплачиваться доставка в размере $this->delivery руб\n";
    } else {
      echo "Это картина {$this->name}, имеет размер - {$this->size}. Цена {$this->getPrice()} руб. Дополнительно будет оплачиваться доставка в размере $this->delivery руб\n";
    }
  }
}
/**
 *Третий тип продуктов
 */
class PaintigsS extends Paintigs
{
  use ChangePrice;
  protected $weight; //вес

  public function getWeight($weight)
  {
    $this->weight = $weight;
    return $this;
  }

  protected $size = '80 x 120 см';

  public function getDescribe()
  {
    if ($this->discount != 0) {
      echo "Это картина {$this->name}, имеет размер - {$this->size}, идёт по акции со скидкой {$this->discount}. Итоговая цена {$this->getPrice()} руб. Дополнительно будет оплачиваться доставка в размере $this->delivery руб\n";
    } else {
      echo "Это картина {$this->name}, имеет размер - {$this->size}. Цена {$this->getPrice()} руб. Дополнительно будет оплачиваться доставка в размере $this->delivery руб\n";
    }
  }

}
echo "<pre>";
$product1 = new PaintigL('"Деревенские просторы"', 160000);
$product1->getPrice();
$product1->setDelivery();
$product1->getDescribe();

echo "<pre>";
$product2 = new PaintigM('"Дом у реки"', 56000);
$product2->discount = 0;
$product2->getPrice();
$product2->setDelivery();
$product2->getDescribe();

echo "<pre>";
$product3 = new PaintigsS('"Завтрак"', 35000);
$product3->getWeight(5);
$product3->setDiscount($priceDiscount);
$product3->getPrice();
$product3->setDelivery();
$product3->getDescribe();

 ?>
