<?php
/*
***************************************************************************
INSTRUCTIONS
Reverse a string
For example: input: "cool" output: "looc"
***************************************************************************
*/


declare(strict_types=1);

function reverseString(string $text): string
{
    return strrev($text);
    throw new BadFunctionCallException("Please implement the reverseString method!");
}
echo reverseString("ola mundo"). "<br>";

echo reverseString("odnum alo");