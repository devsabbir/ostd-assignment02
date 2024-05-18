<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $vowelCount = preg_match_all("/[aeiou]/i", $string);
    $reverse = strrev($string);
    print "Original String: ".$string.", Vowel Count: ".$vowelCount.", Reversed String: ".$reverse."\n";
}