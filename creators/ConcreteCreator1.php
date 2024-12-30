<?php
include_once 'Creator.php';
include_once __DIR__ . '/../products/Product.php';
include_once __DIR__ . '/../products/ConcreteProduct1.php';

class ConcreteCreator1 extends Creator {
  public function factoryMethod(): Product {
    return new ConcreteProduct1();
  }
}
