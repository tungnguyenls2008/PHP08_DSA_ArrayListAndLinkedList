<?php

class Node
{
    public $val;
    public $next;

    public function __construct($val = null, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

    public function __toString()
    {
        return ''. $this->val . PHP_EOL;
    }
}

class LinkedList
{

    public $head;
    public $size;

    public function __construct()
    {
        $this->head = new Node();
        $this->size = 0;
    }

    public function add($index, $value)
    {
        if ($index > $this->size) {
            throw new \Exception('Beyond the scope of the linked list');
        }

        $prev = $this->head;

        for ($i = 0; $i < $index; $i++) {

            $prev = $prev->next;
        }


        $prev->next = new Node($value, $prev->next);


        $this->size++;
    }

    public function addFirst($value)
    {
        try {
            $this->add(0, $value);
        } catch (Exception $e) {
        }
    }


    public function addLast($value)
    {
        try {
            $this->add($this->size, $value);
        } catch (Exception $e) {
        }
    }


    public function select($index)
    {
        if ($index > $this->size - 1) {
            throw new \Exception('Beyond the scope of the linked list');
        }
        $prev = $this->head->next;
        for ($i = 0; $i <= $index; $i++) {
            if ($i == $index) {
                return $prev;
            }
            $prev = $prev->next;
        }
        return -1;
    }


    public function remove($index)
    {
        if ($index > $this->size - 1) {
            throw new \Exception('Beyond the scope of the linked list');
        }

        $prev = $this->head;
        for ($i = 0; $i <= $index; $i++) {
            if ($i == $index) {
                $prev->next = $prev->next->next;
            }
            $prev = $prev->next;
        }
        $this->size--;
    }


    public function isContain($data)
    {
        $current = $this->head;
        $flag = null;
        while ($current != null) {
            if ($current->val == $data) {
                $flag = 'true';
                break;
            } else {
                $current = $current->next;
                $flag = 'false';
            }
        }
        return $flag;
    }


    public function removeFields($value)
    {
        $prev = $this->head;
        while ($prev->next) {
            if ($prev->val == $value) {
                $prev->val = $prev->next->val;
                $prev->next = $prev->next->next;
            } else {
                $prev = $prev->next;
            }
        }
        $this->size--;
    }

    public function __toString()
    {
        $prev = $this->head->next;
        $arr = [];
        while ($prev) {
            $arr[] = $prev->val;
            $prev = $prev->next;
        }
        return implode('-->', $arr);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function cloneList()
    {
        return $this->__toString();
    }

 /*
 //not working
   public function reverseList()
    {
        if ($this->head == null || $this->head->next == null) {
            return $this->head;
        }
        $prev = null;

        $cur = $this->head->next;
        while ($cur) {

            $next = $cur->next;
            $this->head->next = $cur;

            $cur->next = $prev;

            $prev = $cur;

            $cur = $next;
        }

    }*/

}