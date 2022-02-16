<?php

function Palindrome($string){
    $temp = strtolower($string);
    $str = preg_replace( '/[^a-z0-9]/i', '', $temp); 
    if (strrev($str) == $str){ 
        return "true"; 
    }
    else{
        return "false";
    }
} 
function count_Vowels($string)
{   $temp = strtolower($string);
    $str = preg_replace( '/[^a-z0-9]/i', '', $temp);
    preg_match_all('/[aeiou]/i', $str, $matches);
    return count($matches[0]);
}
 
// main 

$origin = $_GET['input'];
// // $original = "fafdsfads";
// //output the result into a text file
// $file = '/tmp/file';
// $content = serialize($original);
// file_put_contents($file, $content);


$result = Palindrome($origin);
$count = count_Vowels($origin);

session_start();

$_SESSION['string'] = $origin;
$_SESSION['result'] = $result;
$_SESSION['count'] = $count;

header('Location: done.php');
//return json with result and count