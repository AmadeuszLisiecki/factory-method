<?php
include_once 'Creator.php';
include_once __DIR__ . '/../products/Product.php';
include_once __DIR__ . '/../products/ConcreteProduct2.php';

class ConcreteCreator2 extends Creator {
  public function factoryMethod(): Product {
    return new ConcreteProduct2();
  }
}
