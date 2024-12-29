<?php
include 'creators/Creator.php';
include 'creators/ConcreteCreator1.php';
include 'creators/ConcreteCreator2.php';

function clientCode(Creator $creator) {
  echo "Client: I'm not aware of the creator's class, but it still works.<br> $creator->someOperation()";
}

echo "App: Launched with the ConcreteCreator1.<br>";
clientCode(new ConcreteCreator1());
echo '<br><br>';

echo "App: Launched with the ConcreteCreator2.<br>";
clientCode(new ConcreteCreator2());