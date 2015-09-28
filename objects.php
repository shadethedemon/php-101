<?php

//pre-defined PHP Classes

//DateTime

//construct
$dateTime = new \DateTime(); //datetime of NOW using local TZ

//echo $dateTime->format('Y-m-d H:i:s T') . PHP_EOL;

$now = time();

//echo "Current Timestamp: {$now}\n";

$dateTime = new \DateTime("@{$now}");
//echo $dateTime->format('Y-m-d H:i:s T') . PHP_EOL;

$dateTime = new \DateTime('+1');
//echo $dateTime->format('Y-m-d H:i:s T') . PHP_EOL;

//compare

$thisDate = new \DateTime('-3 days');
$thatDate = new \DateTime('-2 days');

//var_dump($thisDate === $thatDate);
//var_dump($thisDate > $thatDate);
//var_dump($thisDate < $thatDate);

$now = time();

$thisDateTime = new \DateTime("@{$now}");
$thatDateTime = new \DateTime("@{$now}");

//var_dump($thisDateTime === $thatDateTime);

//add time
$dateTime = new \DateTime();

//add 3 days
$dateTime->add(\DateInterval::createFromDateString('3 days'));
//echo $dateTime->format('Y-m-d H:i:s T') . PHP_EOL;

$tz = new \DateTimeZone('Pacific/Honolulu');
$dateTime = new \DateTime('now', $tz);
//echo $dateTime->format('Y-m-d H:i:s T') . PHP_EOL;

$dateTime = new \DateTime('now', new \DateTimeZone('America/New_York'));

$dateTime->setTimeZone(new \DateTimeZone('Pacific/Honolulu'));

echo $dateTime->format('Y-m-d H:i:s T') . PHP_EOL;
