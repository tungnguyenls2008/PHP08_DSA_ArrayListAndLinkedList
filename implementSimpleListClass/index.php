<?php
include "ArrayList.php";

$listInteger = new MyList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
echo "<br>";
echo $listInteger->get(-1);
