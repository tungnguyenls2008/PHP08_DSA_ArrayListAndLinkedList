<?php
include 'LinkedList.php';
$linkedList=new LinkedList();
$linkedList->addFirst('first');
$linkedList->addLast('second');
$linkedList->addLast('third');
$linkedList->addLast('forth');
$linkedList->addLast('fifth');
echo 'Initial linked list: '.$linkedList.'<br>';
try {
    echo 'the 3rd index is: '.$linkedList->select(3).'<br>';
} catch (Exception $e) {
}
try {
    $linkedList->remove(2);
} catch (Exception $e) {
}
echo 'Linked list after removed index 2: '.$linkedList.'<br>';
echo 'Is value "fifth" contained anywhere? '.$linkedList->isContain('fifth').'<br>';
$linkedList->removeFields('first');
echo 'Linked list after removed value "first": '.$linkedList.'<br>';
echo "Linked list's size: ".$linkedList->getSize().'<br>';
$clonedList=$linkedList->cloneList($linkedList);
echo "cloned list: ".$clonedList.'<br>';

