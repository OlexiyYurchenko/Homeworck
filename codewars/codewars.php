https://www.codewars.com/users/OlexiyYurchenko/completed

1) https://www.codewars.com/kata/55685cd7ad70877c23000102/train/php
    In this simple assignment you are given a number and have to make it negative. But maybe the number is already negative?

    function makeNegative(float $num) : float {
        return ($num > 0) ? -$num : $num;
    }

2) https://www.codewars.com/kata/57eaeb9578748ff92a000009/train/php
    Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

    function sum_mix($a) {
        return array_sum($a);
    }

3) https://www.codewars.com/kata/523f5d21c841566fde000009/train/php
    Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.
    It should remove all values from list a, which are present in list b keeping their order.
    arrayDiff([1,2],[1]) == [2]

    function arrayDiff($a, $b) {
        foreach ($a as $k=>$v) {
            if (in_array($v, $b)) {
                unset($a[$k]);
            }
        }
        return array_values($a);
    }

4) https://www.codewars.com/kata/57cc981a58da9e302a000214/train/php

    You will be given an array and a limit value. You must check that all values in the array are below or equal to the limit value. If they are, return true. Else, return false.
    You can assume all values in the array are numbers.

    function smallEnough($a, $limit)
    {
        $finich = true;
        foreach ($a as $value) {
            if ($value > $limit) {
                $finich = false;
            }
        }
        return $finich;
    }

5) https://www.codewars.com/kata/5672a98bdbdd995fad00000f/train/php
    Let's play! You have to return which player won! In case of a draw return Draw!.
    rps('scissors','paper') // Player 1 won!
    rps('scissors','rock') // Player 2 won!
    rps('paper','paper') // Draw!

    function rpc ($p1, $p2) {
        if ($p1==$p2) {
            $str = "Draw!";
        } elseif (($p1=='scissors' && $p2=='paper') || ($p1=='rock' && $p2=='scissors') || ($p1=='paper' && $p2=='rock')) {
            $str = "Player 1 won!";
        } elseif (($p2=='scissors' && $p1=='paper') || ($p2=='rock' && $p1=='scissors') || ($p2=='paper' && $p1=='rock')) {
            $str = "Player 2 won!";
        }
        return $str;
    }

6) https://www.codewars.com/kata/515e271a311df0350d00000f/train/php
    Complete the square sum function so that it squares each number passed into it and then sums the results together.
    For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.

    function square_sum($numbers) : int {
        return array_sum(array_map( function($val) {
            return $val**2;
        }, $numbers));
    }

7) https://www.codewars.com/kata/57e92e91b63b6cbac20001e5/train/php
    The purpose of this kata is to work out just how many bottles of duty free whiskey you would have to buy such that the saving over the normal high street price would effectively cover the cost of your holiday.
    You will be given the high street price (normPrice), the duty free discount (discount) and the cost of the holiday.
    For example, if a bottle cost £10 normally and the discount in duty free was 10%, you would save £1 per bottle. If your holiday cost £500, the answer you should return would be 500.
    All inputs will be integers. Please return an integer. Round down.

    function dutyFree($normPrice, $discount, $hol) {
        return intval($hol / (($discount*$normPrice)/100));
    }

8) https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9/train/php
    Simple, given a string of words, return the length of the shortest word(s).
    String will never be empty and you do not need to account for different data types.

    function findShort($str){
        $words  = explode(' ', $str);
        $shortWordLength = 0;
        foreach ($words as $word) {
            if ($shortWordLength==0) {
                $shortWordLength = strlen($word);
            }
            if (strlen($word) < $shortWordLength) {
                $shortWordLength = strlen($word);
            }
        }
        return $shortWordLength;
    }

9) https://www.codewars.com/kata/585b1fafe08bae9988000314/train/php
    Given a string made of digits [0-9], return a string where each digit is repeated a number of times equals to its value.
    explode("312") # => "333122"
    explode("102269") # => "12222666666999999999"

    function digits_explode(string $s): string {
        $res = "";
        for ($i=0; $i<strlen($s); $i++) {
            (!$res) ? $res = str_repeat("$s[$i]", $s[$i]) : $res .= str_repeat("$s[$i]", $s[$i]);
        }
        return $res;
    }

10) https://www.codewars.com/kata/5841f4fb673ea2a2ae000111/train/php
    Write a function generateIntegers/generate_integers that accepts a single argument n/$n and generates an array containing the integers from 0 to n/$n inclusive.
    For example, generateIntegers(3)/generate_integers(3) should return [0, 1, 2, 3].
    n/$n can be any integer greater than or equal to 0.

    function generate_integers(int $n): array {
        return range(0,$n);
    }

11) https://www.codewars.com/kata/51f2d1cafc9c0f745c00037d/train/php
    Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

    function solution($str, $ending) {
        try {
            return preg_match("/".preg_quote($ending, '/')."\z/", $str);
        } catch (Exception $e) {
            return false;
        }
    }

12) https://www.codewars.com/kata/5841f4fb673ea2a2ae000111/train/php
    Write a function generateIntegers/generate_integers that accepts a single argument n/$n and generates an array containing the integers from 0 to n/$n inclusive.
    For example, generateIntegers(3)/generate_integers(3) should return [0, 1, 2, 3].
    n/$n can be any integer greater than or equal to 0.

    function generate_integers(int $n): array {
        return range(0,$n);
    }

13) https://www.codewars.com/kata/5ad0d8356165e63c140014d4/train/php
    Create a function finalGrade, which calculates the final grade of a student depending on two parameters: a grade for the exam and a number of completed projects.
    This function should take two arguments: exam - grade for exam (from 0 to 100); projects - number of completed projects (from 0 and above);
    This function should return a number (final grade). There are four types of final grades:
        100, if a grade for the exam is more than 90 or if a number of completed projects more than 10.
        90, if a grade for the exam is more than 75 and if a number of completed projects is minimum 5.
        75, if a grade for the exam is more than 50 and if a number of completed projects is minimum 2.
        0, in other cases

    function finalGrade($exam, $projects) {
        if ($exam>90 || $projects>10) {
            return 100;
        } elseif ($exam>75 && $projects>=5) {
            return 90;
        } elseif ($exam>50 & $projects>=2) {
            return 75;
        } else {
            return 0;
        }
    }

14) https://www.codewars.com/kata/54ff3102c1bad923760001f3/train/php
    Return the number (count) of vowels in the given string.
    We will consider a, e, i, o, u as vowels for this Kata (but not y).
    The input string will only consist of lower case letters and/or spaces.

    function getCount($str) {
        $list = ['a', 'e', 'i', 'o', 'u'];
        return count(array_filter(str_split($str), function($val) use ($list) {
                return in_array($val, $list);
        }));
    }

15) https://www.codewars.com/kata/598f76a44f613e0e0b000026/train/php
    Your task in this kata is to implement a function that calculates the sum of the integers inside a string. For example, in the string "The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog", the sum of the integers is 3635.

    function sum_of_integers_in_string(string $s): int {
        return array_sum(explode(' ', preg_replace('/[^0-9]/i', ' ', $s)));
    }

16) https://www.codewars.com/kata/525f50e3b73515a6db000b83/train/php
    Write a function that accepts an array of 10 integers (between 0 and 9), that returns a string of those numbers in the form of a phone number.
    Example:
        createPhoneNumber([1,2,3,4,5,6,7,8,9,0]); // => returns "(123) 456-7890"

    function createPhoneNumber($numbersArray) {
        return preg_replace('/([0-9]{3})([0-9]{3})([0-9]{4})/', '($1) $2-$3', implode("", $numbersArray));
    }