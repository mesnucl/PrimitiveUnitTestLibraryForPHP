<?php

class testingTests
{
    /**
     * @TestMethod
     */
    public function shouldSucced() : bool
    {
        return true;
    }
    /**
     * @TestMethod
     */
    public function shouldFail() : bool
    {
        return false;
    }

    public function shouldBeOmitted() : bool
    {
        return false;
    }
}