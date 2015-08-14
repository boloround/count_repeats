<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_singleLetterWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "a";
            $input2 = "a";

            //Act
            $results = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array(1, "a", "a"), $results);
        }

        function test_countRepeats_doubleWordString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "I";
            $input2 = "I do.";

            //Act
            $results = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array(1, "I", "I do."), $results);
        }

    }
 ?>
