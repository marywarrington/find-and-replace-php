<!-- testing with php unit, use this template for guidance -->
<?php
    require_once __DIR__ . '/../src/FindAndReplace.php';

    class test_FindAndReplace extends PHPUnit_Framework_TestCase
    {
        function test_FindAndReplace_replaceOne()
        {
            //Arrange
            $test_FindAndReplace = new FindAndReplace;
            $input = "Hello world";
            $replace = "world";
            $replaceWith = "universe";

            //Act
            $result = $test_FindAndReplace->fAndReplace($input, $replace, $replaceWith);

            //Assert
            $this->assertEquals("Hello universe", $result);
        }

    }
 ?>
