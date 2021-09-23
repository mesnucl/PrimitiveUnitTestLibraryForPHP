<?php

class CalculatorTests
{
    private Calculator $calculator;

    public function __construct()
    {
        $this->calculator = new Calculator();
    }
    /**
     * @TestMethod
     */
    public function addIntegers_addingTwoIntegersToASum_theFunctionReturns5() : bool
    {
        //Arange
        $expectedOutcome = 5;

        //Act
        $result = $this->calculator->addIntegers(3,2);

        //Assert
        return $expectedOutcome===$result;
    }
    /**
     * @TestMethod
     */
    public function substractIntegers_substractingTwoIntegersToASum_theFunctionReturns1() : bool
    {
        //Arange
        $expectedOutcome = 1;

        //Act
        $result = $this->calculator->substractIntegers(3,2);

        //Assert
        return $expectedOutcome===$result;
    }
    /**
     * @TestMethod
     */
    public function multiplyIntegers_multiplyingTwoIntegersToASum_theFunctionReturns30() : bool
    {
        //Arange
        $expectedOutcome = 30;

        //Act
        $result = $this->calculator->multiplyIntegers(5,6);

        //Assert
        return $expectedOutcome===$result;
    }
}