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

echo "TeamA win probability: " . $teamAProbabilityPercentage . "%\n";
echo "TeamB win probability: " . $teamBProbabilityPercentage . "%\n";
echo "Draw probability: " . $drawProbabilityPercentage . "%\n";
echo "Profit margin: " . $profitMargin . "%\n";