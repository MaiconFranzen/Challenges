<?php 
/*
******************************************************************
First Reverse
Have the function FirstReverse(str) take the str parameter being 
passed and return the string in reversed order. For example: if 
the input string is "Hello World and Coders" then your program 
should return the string sredoC dna dlroW olleH.
*******************************************************************
*/


function FirstReverse($str) {
 $str = strrev($str);
  // code goes here
  return strrev($str);

}
   
// keep this function call here  
echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?>