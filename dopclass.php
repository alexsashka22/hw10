<?php
/**
 * Интерфейс для продукта
 */
interface InterfaceNameForProduct
{
  public function getDescription();
  public function getPrice();
}

abstract class Product
{
  protected $name; //название
  protected $category; //категория
  protected $material; //материал

  protected $delivery = 250; //доставка
  protected $discount = 10; //скидка
  protected $price;  // цена

  public function __construct ($name, $category, $material);
  abstract public function getDescription();
  abstract public function getPrice();
}

/**
 *
 */
class ArtL extends Product
{

  public function __construct ($name, $category, $material)
  {
    $this->name = $name;
    $this->category = $category;
    $this->material = $material;
  }

  public function getPrice();

  public function getDescribe()
  {
    echo "Это {$this->name}, из категории - {$this->category}, сделана из материала {$this->material}. ";
  }
}

class ArtM extends Product
{

  public function __construct ($name, $category, $material)
  {
    $this->name = $name;
    $this->category = $category;
    $this->material = $material;
  }

}

class ArtS extends Product
{
  protected $weight; //вес

  public function __construct ($name, $category, $material)
  {
    $this->name = $name;
    $this->category = $category;
    $this->material = $material;
  }

}

 ?>
