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

