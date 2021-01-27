<?php
    require "setup.php";

    $id = $_GET['id'];

    // $BarbieInventory->find($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$BarbieInventory->find($id)->name;?></title>
</head>
<body>
    <img src="" alt="picture">
    <h1><?=$BarbieInventory->find($id)->name;?></h1>
    <p><?=$BarbieInventory->find($id)->name;?> is part of the "<?=$BarbieInventory->find($id)->collection;?>" collection.
    This doll has been first introduced in the year <?=$BarbieInventory->find($id)->year_of_birth;?>.</p>
    <h6>Current value: &dollar; <?=$BarbieInventory->find($id)->value_dollar;?></h6>
    <button><a style="text-decoration:none;" href="index.php">Return to list</a></button>
</body>
</html>

