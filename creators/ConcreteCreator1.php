<?php
include 'Creator.php';
include '../products/Product.php';

class ConcreteCreator1 extends Creator {
  public function factoryMethod(): Product {
    return new ConcreteProduct1();
  }
}
