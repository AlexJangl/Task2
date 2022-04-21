<?php

class MyArray
{
    /**
     * @param array $arr
     **/
    protected $arr;

    function __construct($arraySize) {
        for ($i = 0; $i < $arraySize; $i++) {
            $this->arr[] = rand(0, 100);
        }
    }

    public function getArr()
    {
        return $this->arr;
    }

    public function minArray() {
        $min = $this->arr[0];
        for ($i = 1; $i < count($this->arr); $i++) {
            if ($min > $this->arr[$i]) {
                $min = $this->arr[$i];
            }
        }
        return $min;
    }

    public function maxArray() {
        $max = $this->arr[0];
        for ($i = 1; $i < count($this->arr); $i++) {
            if ($max < $this->arr[$i]) {
                $max = $this->arr[$i];
            }
        }
        return $max;
    }

    public function evenArr(){
        $even = array();
        for ($i = 0; $i < count($this->arr); $i++) {
            if (!($this->arr[$i]%2)) {
                $even[] = $this->arr[$i];
            }
        }
        return $even;
    }

    public function oddArr(){
        $odd = array();
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($this->arr[$i]%2) {
                $odd[] = $this->arr[$i];
            }
        }
        return $odd;
    }

    public function dividedByFourArr(){
        $dividedByFour = array();
        for ($i = 0; $i < count($this->arr); $i++) {
            if (!($this->arr[$i]%4)) {
                $dividedByFour[] = $this->arr[$i];
            }
        }
        return $dividedByFour;
    }

    public function sumMaxMinElements(){
       return $this->maxArray() + $this->minArray();
    }



}