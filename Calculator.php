<?php

class Calculator
{

    public function addIntegers(int $integerValueLefthand, int $integerValueRightHand) : int
    {
        return $integerValueLefthand + $integerValueLefthand;
    }
    public function substractIntegers(int $integerValueLefthand, int $integerValueRightHand) : int
    {
        return $integerValueLefthand - $integerValueLefthand;
    }
    public function multiplyIntegers(int $integerValueLefthand, int $integerValueRightHand) : int
    {
        return $integerValueLefthand * $integerValueLefthand;
    }

}