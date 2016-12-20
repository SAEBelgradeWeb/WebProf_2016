<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        li {
            color: red;
        }

        .completed {
            text-decoration: line-through;
            color: black;
        }
    </style>
</head>
<body>
<ul>
    <?php foreach ($taskovi as $task): ?>
        <li class="<?= ($task['completed']) ? "completed" : ""; ?>"><?= $task['task']?> (do: <?= $task['datum']?>) <a href="#"><i class="fa fa-check-circle"></i></a></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
