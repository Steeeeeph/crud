<?php

require "setup.php";

$id = $_GET['id'];

$BarbieInventory->find($id);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $collection = $_POST['collection'];
    $yearOfBirth = (int) $_POST['year_of_birth'];
    $valueDollar = $_POST['value_dollar'];

    $BarbieInventory->update($name, $collection, $yearOfBirth, $valueDollar, $id);
    header("Location: http://localhost:2145/crud/Starter-pack/"); //TODO get location from variable 
}

require "edit.html.php";