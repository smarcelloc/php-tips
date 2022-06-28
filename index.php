<?php

require __DIR__ . '/vendor/autoload.php';

$path = [
    'DataLayer DB' => '/src/DataLayer/index.php',
    'PDF DOM' => '/src/pdf/index.php'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV['APP_NAME'] ?? 'App' ?></title>
</head>

<body>
    <?php foreach ($path as $name => $link) : ?>
        <a href="<?= $_ENV['APP_URL'] ?? 'http://localhost' ?><?= $link ?>"><?= $name ?></a><br />
    <?php endforeach ?>
</body>

</html>