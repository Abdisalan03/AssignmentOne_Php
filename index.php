

<!-- Jamhuriya University of Science & Technology
 Faculty of Computer & IT
 Course Title: PHP & MySQL
 Class: CA208
Activity: Chapter 3 assignment
  Due date: October 13, 2023
 Name: Mohamed Osman Abdi
 ID:C120465 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php my project</title>
</head>
<body>
<?php
/*1*/
// function findGreatestAndSmallest($num1, $num2, $num3) {
//     $greatest = $num1;
//     $smallest = $num1;

//     // Find the greatest number
//     if ($num2 > $greatest) {
//         $greatest = $num2;
//     }
//     if ($num3 > $greatest) {
//         $greatest = $num3;
//     }

//     // Find the smallest number
//     if ($num2 < $smallest) {
//         $smallest = $num2;
//     }
//     if ($num3 < $smallest) {
//         $smallest = $num3;
//     }

//     return array($greatest, $smallest);
// }

// $num1 = 20;
// $num2 = 5;
// $num3 = 3;

// list($greatest, $smallest) = findGreatestAndSmallest($num1, $num2, $num3);

// echo "The greatest number is: " . $greatest . "\n";
// echo "The smallest number is: " . $smallest . "\n";
// /*2*/
// function isEven($number) {
//     if ($number % 2 == 0) {
//         return true;
//     } else {
//         return false;
//     }
// }

// $number = 7;

// if (isEven($number)) {
//     echo $number . " is even.\n";
// } else {
//     echo $number . " is odd.\n";
// }
// /*3*/
// $number = 1;

// while ($number <= 50) {
//     if ($number % 5 == 0) {
//         echo $number . "\n";
//     }
//     $number++;
// }
// /*4*/
// function reverseNumber($number) {
//     $reverse = 0;

//     do {
//         $remainder = $number % 10;  // Get the last digit
//         $reverse = ($reverse * 10) + $remainder;  // Append the digit to the reverse number
//         $number = (int)($number / 10);  // Remove the last digit from the original number
//     } while ($number > 0);

//     return $reverse;
// }

// $number = 12345;
// $reversedNumber = reverseNumber($number);

// echo "The reverse of $number is $reversedNumber.";
// /*5*/
// function findCommonFactors($num1, $num2) {
//     $commonFactors = [];

//     for ($i = 1; $i <= min($num1, $num2); $i++) {
//         if ($num1 % $i == 0 && $num2 % $i == 0) {
//             $commonFactors[] = $i;
//         }
//     }

//     return $commonFactors;
// }

// $num1 = 42;
// $num2 = 70;

// $commonFactors = findCommonFactors($num1, $num2);

// echo "The common factors of $num1 and $num2 are: " . implode(", ", $commonFactors);
// /*6*/
// function calculateHCF($num1, $num2) {
//     // Make sure both numbers are positive
//     $num1 = abs($num1);
//     $num2 = abs($num2);

//     do {
//         if ($num1 > $num2) {
//             $num1 = $num1 - $num2;
//         } else {
//             $num2 = $num2 - $num1;
//         }
//     } while ($num1 != $num2);

//     return $num1;
// }

// $num1 = 18;
// $num2 = 24;

// $hcf = calculateHCF($num1, $num2);

// echo "The Highest Common Factor (HCF) of $num1 and $num2 is: $hcf.";
/*7*/
// function isPrime($number) {
//     if ($number <= 1) {
//         return false;  // Numbers less than or equal to 1 are not prime
//     }

//     for ($i = 2; $i <= sqrt($number); $i++) {
//         if ($number % $i == 0) {
//             return false;  // Number is divisible by $i, hence not prime
//         }
//     }

//     return true;  // Number is prime
// }

// $number = 17;

// if (isPrime($number)) {
//     echo $number . " is a prime number.";
// } else {
//     echo $number . " is a non-prime number.";
// }
/*8*/
// function isPrime($number) {
//     if ($number <= 1) {
//         return false;
//     }

//     for ($i = 2; $i <= sqrt($number); $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }

//     return true;
// }

// $number = 100;

// while ($number >= 12) {
//     if (!isPrime($number)) {
//         echo $number . " ";
//     }
//     $number--;
// }
/*9*/
// function fibonacciSeries($limit) {
//     $num1 = 0;
//     $num2 = 1;
//     $count = 2;

//     echo $num1 . ", " . $num2;

//     while ($count < $limit) {
//         $num3 = $num1 + $num2;
//         echo ", " . $num3;

//         $num1 = $num2;
//         $num2 = $num3;
//         $count++;
//     }
// }

// $limit = 5;

// echo "Fibonacci series up to $limit terms: ";
// fibonacciSeries($limit);

?>
</body>
</html>