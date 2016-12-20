<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<?php

for ($i = 0; $i < 10; $i++)
{
    //echo $i . "<br>";
}

$i = 0;
while ($i < 10)
{
    //echo $i . "<br>";
    $i++;
}
$automobili = ['mazda', 'honda', 'toyota'];

$user = [
    'name' => 'Peter',
    'lastname' => 'Johnson',
    'emial' => 'peter@gmail.com'
];

foreach ($automobili as $index => $automobil)
{
    echo "Element " . $automobil . " ima key: " . $index . "<br>";
}

foreach ($user as $key => $value)
{
    //echo "Element " . $value . " ima key: " . $key . "<br>";
    echo $key . ": " . $value . "<br>";
}

echo "<ul>";
foreach ($automobili as $automobil) {

    echo "<li>" . $automobil . "</li>";
}

echo "</ul>";

$korisnici = [
    0 => [
        'name' => 'Nikola',
        'lastname' => 'Tesla',
        'email' => 'struja@zasve.com'
    ],
    1 => [
        'name' => 'Vuk',
        'lastname' => 'Karadzic',
        'email' => 'slova@zasve.com'
    ],
    2 => [
        'name' => 'Djordje',
        'lastname' => 'Vajfert',
        'email' => 'pivo@zasve.com'
    ],
    3 => [
        'name' => 'Lepa',
        'lastname' => 'Lukic',
        'email' => 'peva@zasve.com'
    ]
];
?>

<table class="table table-bordered">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Email</th>
    </tr>

    <?php foreach($korisnici as $korisnik): ?>
    <tr>
       <td><?= $korisnik['name'] ?></td>
       <td><?= $korisnik['lastname'] ?></td>
       <td><?= $korisnik['email'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</div>

</body>
</html>