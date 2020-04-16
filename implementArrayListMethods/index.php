<?php
include_once "MyList.php";
$arr = ['nothing', 'nothing'];
$myListTest = new MyList($arr);
echo '1st instance: '.$myListTest.'<br>';
$myListTest->add('something');
$myListTest->add('something else');
$myListTest->add('some other thing');
$myListTest->add('and another one');
$arrToAdd = ['something', 'something', 'something', 'something'];
$myListTest->addAll($arrToAdd);
$myListTest->addToPos(3, 'something special');
echo 'after add instance: '.$myListTest.'<br>';
$myListTest->remove(3);
$size = $myListTest->size();
echo 'array size: '.($size+1).'<br>';
echo 'after remove index 3 instance: '.$myListTest.'<br>';
$myListTest->removeRange(1, 3);
$contain = $myListTest->contains('something');
echo 'after remove index 1 to 3 instance: '.$myListTest.'<br>';
$indexOf = $myListTest->indexOf('and another one');
echo 'index of "and another one": '.$indexOf.'<br>';
echo 'Last index of "some other thing" is: '.(($myListTest->lastIndexOf('some other thing'))+1).'<br>';
$myListTest->sort();
echo 'after sort instance: '.$myListTest.'<br>';
$myListTest->clear();
echo 'after clear instance: '.$myListTest.'<br>';
if ($myListTest->isEmpty()) {
    echo 'This arrayList is empty <br>';
}