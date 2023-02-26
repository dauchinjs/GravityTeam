<?php //30min

$teamA = 1.2;
$teamB = 6.4;
$draw = 19.2;

$teamAProbability = 1 / $teamA;
$teamBProbability = 1 / $teamB;
$drawProbability = 1 / $draw;

$teamAProbabilityPercentage = number_format($teamAProbability * 100, 2);
$teamBProbabilityPercentage = number_format($teamBProbability * 100, 2);
$drawProbabilityPercentage = number_format($drawProbability * 100, 2);

$totalProbability = $teamAProbability + $teamBProbability + $drawProbability;

$profitMargin = number_format(($totalProbability - 1) * 100, 2);

echo "TeamA win probability: " . $teamAProbabilityPercentage . "%\n"; // result is 83.33%
echo "TeamB win probability: " . $teamBProbabilityPercentage . "%\n"; // result is 15.63%
echo "Draw probability: " . $drawProbabilityPercentage . "%\n"; // result is 5.21%
echo "Profit margin: " . $profitMargin . "%\n"; // result is 4.17%
