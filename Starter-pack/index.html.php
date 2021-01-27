
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barbie World - track your collection of Barbie Dolls</title>
</head>
<body>
<h1>Barbie World - track your collection of Barbie dolls</h1>
<div class="get-inventory">
<form method="POST">
    <table id="inventory" class="dolls">
        <thead>
            <tr>
                <th class="name">Official name</th>
                <th class="collection">Part of Collection</th>
                <th class="year-of-birth">Made in</th>
                <th class="value-dollar">Value</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dolls as $doll) : ?>
                <tr>
                    <td class="name"> <a href="show.php"> <?= $doll['name'] ?></a></td>
                    <td class="collection"><?= $doll['collection'] ?></td>
                    <td class="year-of-birth"><?= $doll['year_of_birth'] ?></td>
                    <td class="value-dollar"><?= $doll['value_dollar'] ?></td>
                    <td><input type="submit" formaction="edit.php?id=<?=$doll['id']?>" name="edit" value="Edit"></td>
                    <td><input type="submit" formaction="delete.php?id=<?=$doll['id']?>" name="delete" value="Delete"></td>

                </tr>
            <?php endforeach; ?>
            <tr>
                <td class="name"><input type="text" name="name" id="name"></td>
                <td class="collection"><input type="text" name="collection" id="collection"></td>
                <td class="year-of-birth"><input type="number" min="1959" max="<?=date("Y")?>" name="year_of_birth" id="year_of_birth"></td>
                <td class="value-dollar"><input type="number" step=".01" name="value_dollar" id="value_dollar"></td>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </tbody>
    </table>
</form>
</div>



</body>
</html>