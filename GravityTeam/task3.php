<?php //5-6h

$file = fopen('ETHUSDT-trades-2023-01-01.csv', 'r');

$totalValue = 0;
$totalAmount = 0;

while (($row = fgetcsv($file)) !== false) {
    $price = $row[1];
    $amount = $row[2];
    $totalValue += $price * $amount;
    $totalAmount += $amount;
}

fclose($file);

$averagePrice = $totalValue / $totalAmount;

echo "Average trade price: " . $averagePrice . " ETH/USDT" . PHP_EOL;