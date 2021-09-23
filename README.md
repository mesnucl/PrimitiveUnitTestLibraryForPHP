# PrimitiveUnitTestLibraryForPHP

This is at primitive unit test library, created with educational purpose.

## To use:

1. copy the TestRunner directory into the directory that contains classes you 
   wish to test.
2. Create a test class, using the name convention "...Tests" in the end of both class and filename.
3. Create a test function by annotating it with @TestMethod just abouve the function name.
```php
/**
* @TestMethod
*/
```
4. Ensure that the test method returns a boolean value.
5. Execute "main.php" file in located in the root of TestRunner directory.
```powershell
php .\TestRunner\main.php
```
(Powershell example)


## See also:
You can also take a look at the included test examples in the UnitTest directory.
