<?php

class ArrayLib
{
    private $array = [];
    private $length = 0;

    public function __construct($data = [])
    {
        $this->array = $data;
        $this->length = count($data);
    }

    public static function generate($num_item, $mix = false)
    {
        $data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
        $list=[];
        for ($i = 0; $i < $num_item; $i++) {
            $list[] = $mix ? $data[rand(0, count($data) - 1)] : $i;
        }
        return $list;
    }

    public function toString()
    {
        return implode('', $this->array);
    }

    public function toArray($text)
    {
        unset($this->array);
        for ($i = 0; $i < strlen($text); $i++) {
            $this->array[] = $text[$i];
        }
        $this->length = count($this->array);
    }

    public function insert($item)
    {
        $this->array[] = $item;
        $this->length = count($this->array);
    }

    public function edit($index, $item)
    {
        if (isset($this->array[$index])) {
            $this->array[$index] = $item;
        }
    }

    public function remove($index)
    {
        if (isset($this->array[$index])) {
            unset($this->array[$index]);
            $this->length = count($this->array);
        }
    }


    public function getArray()
    {
        return $this->array;
    }

    public function getLength()
    {
        return $this->length;
    }


}