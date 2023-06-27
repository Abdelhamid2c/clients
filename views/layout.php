<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title><?= $title ;?></title>
</head>
<body>
    <div class="container at-2">
        <?php require_once "include/nav.php" ?>
        <h2><?= $title ?></h2>
        <hr>
        <?= $container ?>
    </div>
</body>
</html>