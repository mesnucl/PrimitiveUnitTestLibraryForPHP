<?php

class TestResult
{
    private bool $isTestSucceded;
    private string $testMethodName;

    public function __construct(bool $isTestSucceded,string $testMethodName)
    {
        $this->isTestSucceded = $isTestSucceded;
        $this->testMethodName = $testMethodName;
    }

    public function isTestSucceded(): bool
    {
        return $this->isTestSucceded;
    }
    public function getTestMethodName(): string
    {
        return $this->testMethodName;
    }

    public function __toString(): string
    {
        return "Test method name: {$this->testMethodName} | {$this->testEvaluationString()}";
    }
    private function testEvaluationString(){
        return $this->isTestSucceded ? "Test passed":"Test failed";
    }
}