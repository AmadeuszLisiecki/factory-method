<?php
include_once 'Product.php';

class ConcreteProduct2 implements Product {
  public function operation(): string {
    return 'Result of ConcreteProduct2 operation.';
  }
}
