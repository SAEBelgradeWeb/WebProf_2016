<?php

if($_POST['name'] != "Mile") {
    $greska = "Sve je poslo naopacke";
    header("Location: index.php?greska=$greska");
}

echo "Sve je proslo dobro";
