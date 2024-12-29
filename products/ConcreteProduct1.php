<?php
include 'Product.php';

class ConcreteProduct1 implements Product {
  public function operation(): string {
    return 'Result of ConcreteProduct1 operation.';
  }
}