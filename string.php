<?php


// $strings = ["Hello", "World", "PHP", "Programming"];
// function countVowel($string)
// {
//     $vowel = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
//     $count = 0;
//     for ($i = 0; $i < strlen($string); $i++) {
//         if (in_array($string[$i], $vowel)) {
//             $count++;
//         }
//     }
//     return $count;
// }
// foreach ($strings as $string) {
//     $vowelCount = countVowel($string);
//     $reversedString = strrev($string);

//     echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
// }


function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array(strtolower($str[$i]), $vowels)) {
            $count++;
        }
    }
    return $count;
}

$strings = ["Hello", "World", "PHP", "Programming"];
foreach($strings as $string){
    $vowelCount = countVowels($string);
    $stringReverse = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $stringReverse \n";
}