<?php


    require_once './../vendor/autoload.php';


    $faker = Faker\Factory::create();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php for ($i = 0; $i < 10; $i++) {?>
        <tr>  
            <td><?= $i + 1 ?></td>
            <td><?= $faker->name ?></td>
            <td><?= $faker->email ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
