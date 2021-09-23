<?php

class Calculator
{

    public function addIntegers(int $integerValueLefthand, int $integerValueRightHand) : int
    {
        return ($integerValueLefthand + $integerValueRightHand);
    }
    public function substractIntegers(int $integerValueLefthand, int $integerValueRightHand) : int
    {
        return $integerValueLefthand - $integerValueRightHand;
    }
    public function multiplyIntegers(int $integerValueLefthand, int $integerValueRightHand) : int
    {
        return $integerValueLefthand * $integerValueRightHand;
    }

}