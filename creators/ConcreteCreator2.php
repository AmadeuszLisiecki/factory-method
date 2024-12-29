<?php
include 'Creator.php';
include '../products/Product.php';

class ConcreteCreator2 extends Creator {
  public function factoryMethod(): Product {
    return new ConcreteProduct2();
  }
}
