<?php
    require_once "src/RepeatCounter.php";

    class RepeatcounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_singleLetterWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "a";
            $input2 = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array(1, "a", "a"), $results);
        }

    }
 ?>
