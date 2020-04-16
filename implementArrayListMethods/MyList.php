<?php
class MyList
{


    protected $myList = ['first thing'];


    public function __construct($arr = "")
    {
        if (is_array($arr) == true) {
            $this->myList = $arr;
        } else {
            $this->myList = [];
        }
    }

    public function __toString()
    {
        return implode(', ', $this->myList);
    }

    public function addToPos($index, $obj)
    {

        $this->myList[$index] = $obj;

    }

    public function add($obj)
    {
        array_push($this->myList, $obj);
    }


    public function addAll($arr)
    {
        $this->myList = array_merge($this->myList, $arr);
    }


    public function clear()
    {
        $this->myList = [];
    }


    public function contains($obj)
    {
        return in_array($obj, $this->myList);
    }

    public function get($index)
    {

        return $this->myList[$index];

    }

    public function indexOf($obj)
    {
        while (list ($key, $val) = each($this->myList)) {
            if ($obj == $val) {
                return $key;
            }
        }
        return -1;
    }

    public function isEmpty()
    {
        if (count($this->myList) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function lastIndexOf($obj)
    {
        return array_search($obj, $this->myList);
    }

    public function remove($index)
    {
        $newArrayList = [];

        for ($i = 0; $i < $this->size(); $i++) {
            if ($index != $i) {
                $newArrayList[] = $this->get($i);
            }
        }
        $this->myList = $newArrayList;
    }

    public function removeRange($fromIndex, $toIndex)
    {

        $newArrayList = array();

        for ($i = 0; $i < $this->size(); $i++) {
            if ($i < $fromIndex || $i > $toIndex) {
                $newArrayList[] = $this->get($i);
            }
        }

        $this->myList = $newArrayList;

    }

    public function size()
    {
        return count($this->myList);
    }

    public function sort()
    {
        sort($this->myList);
    }
}
