<?php
    class RepeatCounter
    {
        function countRepeats($word, $string)
        {
            //return $word;
            //lowercase both inputs
            $f_word = strtolower($word);
            $f_string = strtolower($string);
            //strip any punctuation from input string
            $f_string = preg_replace("#[[:punct:]]#", "", $f_string);
            $count = 0;
            $f_string_array = explode(" ", $f_string);

            foreach($f_string_array as $iword) {
                if ($f_word == $iword) {
                    $count++;
                }
            }
            //Error message if no matches are found
            if ($count == 0) {
                $count = "No match. Try again.";
            }

            $result_array = array($count, $word, $string);
            return $result_array;
        }
    }
 ?>
