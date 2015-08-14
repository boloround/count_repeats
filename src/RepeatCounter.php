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
            //Creates  an array containing each word in the search string as a value
            $f_string_array = explode(" ", $f_string);
            //Tests each word in the search string array against the submitted word. Increments a coounter when a match is found.
            foreach($f_string_array as $iword) {
                if ($f_word == $iword) {
                    $count++;
                }
            }
            //Error message if no matches are found
            if ($count == 0) {
                $count = "No match. Try again.";
            }
            //Number of matches plus the original search term and string to be searched sent back to app.php
            $result_array = array($count, $word, $string);
            return $result_array;
        }
    }
 ?>
