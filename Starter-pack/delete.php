<?php

require "setup.php";

$id = $_GET['id'];

$BarbieInventory->find($id);

if (isset($_POST['delete'])) {

    $BarbieInventory->delete($id);
    header("Location: http://localhost:2145/crud/Starter-pack/"); //TODO get location from variable 
}

