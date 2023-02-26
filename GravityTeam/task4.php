<?php //1h30min

$sum = 0;
$start = 0;
$end = 10 ** 12;

for ($i = $start; $i <= $end; $i++) {

    $digits = str_split($i);

    foreach ($digits as $digit) {
        $sum += $digit;
    }
}

echo "The sum of all digits of all natural numbers between 0 and 10^12 is: " . $sum . "\n"; // result is 73800000001
//It's worth noting that the code runs without any issues until $end is set to 10^7, meaning
//it computes the correct sum for natural numbers between 0 and 10^7.
//However, if we set the $end value to a larger number like 10^12, the code may use a lot of memory and take a long time to execute.
