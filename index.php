<?php
include_once 'creators/Creator.php';
include_once 'creators/ConcreteCreator1.php';
include_once 'creators/ConcreteCreator2.php';

function clientCode(Creator $creator) {
  echo 'Client: I\'m not aware of the creator\'s class, but it still works.<br>' . $creator->someOperation();
}

echo 'App: Launched with the ConcreteCreator1.<br>';
clientCode(new ConcreteCreator1());
echo '<br><br>';

echo 'App: Launched with the ConcreteCreator2.<br>';
clientCode(new ConcreteCreator2());
