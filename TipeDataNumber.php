<?php

// Integer
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in Number : ";
var_dump(1_234_567);

// Float
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation Plus : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation Minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di Floating Point : ";
var_dump(1_123.123);

// Overflow Number
echo "Integer Overflow : ";
var_dump(9223372036854775808);