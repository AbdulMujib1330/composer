<?php
require_once "./../vendor/autoload.php";

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
    <table border="solid">
        <thead>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php for($i=1;$i<=5;$i++) : ?>
                <tr>
                    <td><?= $faker->name()?></td>
                    <td><?= $faker->email()?></td>
                </tr>
            <?php endfor?>
        </tbody>
    </table>
</body>
</html>