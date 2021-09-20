<?php

class TestRunner
{

    public function __construct()
    {}

    public static function runTests()
    {
        $testClasses = TestRunner::getClassesThatUsesTestsConventionItName();
        $testResults = TestRunner::runMethodsThatIsAnnotedAsTest($testClasses);

        foreach ($testResults as $testResult)
        {
            echo $testResult."\n";
        }

    }

    private static function runMethodsThatIsAnnotedAsTest($testClasses): iterable
    {
        foreach ($testClasses as $testClass)
        {
            $reflectionClass = new ReflectionClass($testClass);
            $reflectionMethods = $reflectionClass->getMethods();

            foreach ($reflectionMethods as $reflectionMethod)
            {
                if(TestRunner::isATestMethod($reflectionMethod))
                {
                    yield new TestResult(
                        $reflectionMethod->invoke($testClass),
                        $reflectionMethod->getName()
                    );
                }
            }
        }


    }
    private static function getClassesThatUsesTestsConventionItName()
    {
       $testClassNames = array_filter(
            get_declared_classes(),
            function($className){
                return str_ends_with($className,"Tests");
            }
        );

        foreach ($testClassNames as $testClassName)
        {
            yield new $testClassName();
        }
    }
    private static function isATestMethod(ReflectionMethod $reflectionMethod)
    {
        $MethodComments = $reflectionMethod->getDocComment();

        return strpos($MethodComments,"@TestMethod") !== false;
    }
}