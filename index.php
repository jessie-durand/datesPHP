<?php

$presentTime = new DateTime;
$destinationTime = new DateTime;

$destinationTime->setDate(2019, 8, 16)->setTime(01, 30);

echo 'Present time : ' . $presentTime->format('M d Y A h : i') . "</br>";
echo 'Destination time : ' . $destinationTime->format('M d Y A h : i') . "</br>";

$timeUntilDestination = $presentTime->diff($destinationTime);
echo $timeUntilDestination->format('Mon fils est né il y a %Y ans %M mois %d jours %h heures et %i minutes');

?>