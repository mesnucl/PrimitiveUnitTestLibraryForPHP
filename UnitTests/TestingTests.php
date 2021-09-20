<?php

class testingTests
{
    /**
     * @TestMethod
     */
    public function shouldSucced()
    {
        return true;
    }
    /**
     * @TestMethod
     */
    public function shouldFail()
    {
        return false;
    }

    public function shouldBeOmitted()
    {
        return false;
    }
}