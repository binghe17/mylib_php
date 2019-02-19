<?php 

date_default_timezone_set('Etc/UTC');

$startDateTime = '2018-12-03 10:30:00';
$endDateTime = '2018-12-30 11:30:00';
$repeatEndDate = '2018-12-30';
#$timestamp = strtotime($startDateTime);
#$day_of_week = date('l', $timestamp);
$step  = 1;
$unit  = 'W';
$repeatStart = new DateTime($startDateTime);
$repeatEnd   = new DateTime($repeatEndDate);
#$repeatStart->modify($day_of_week);  
$interval = new DateInterval("P{$step}{$unit}");
$period   = new DatePeriod($repeatStart, $interval, $repeatEnd);



foreach ($period as $key => $date ) {
    echo($date->format('Y-m-d H:i:s')) . PHP_EOL .'<br>';
}

        // 2018-12-03 10:30:00
        // 2018-12-10 10:30:00
        // 2018-12-17 10:30:00
        // 2018-12-24 10:30:00
