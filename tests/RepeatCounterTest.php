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

        function test_countRepeats_doubleLetterWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "do";
            $input2 = "do";

            //Act
            $results = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array(1, "do", "do"), $results);
        }

        function test_countRepeats_doubleLetterMultiWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "do";
            $input2 = "I do.";

            //Act
            $results = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array(1, "do", "I do."), $results);
        }

        function test_countRepeats_multiLetterMultiWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "too";
            $input2 = "I do too.";

            //Act
            $results = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array(1, "too", "I do too."), $results);
        }

        function test_countRepeats_multiLetterMultiInstance()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "sun";
            $input2 = "Apply sun protection when you go out in the sun.";

            //Act
            $results = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array(2, "sun", "Apply sun protection when you go out in the sun."), $results);
        }

        function test_countRepeats_noMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "also";
            $input2 = "I do too.";

            //Act
            $results = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(array("No match. Try again.", "also", "I do too."), $results);
        }

    }
 ?>
