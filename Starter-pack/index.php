<?php

require "setup.php";
// unset($_POST);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $collection = $_POST['collection'];
    $yearOfBirth = (int) $_POST['year_of_birth'];
    $valueDollar = $_POST['value_dollar'];
    
    $BarbieInventory->create($name, $collection, $yearOfBirth, $valueDollar);
}

$dolls = $BarbieInventory->get();




require 'index.html.php';



