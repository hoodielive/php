<?php

$raw = '4.12.2018';
$start = DateTime::createFromFormat('d. m. Y', $raw); 

echo 'Start date: ' . $start->format('Y-m-d') . "\n"; 

// create a copy of $start and add one month and 6 days 
$end = clone $start; 
$end->add(new DateInterval('P1M6D')); 

$diff = $end->diff($start); 
echo 'Difference: ' . $diff->format('%m month, %d days (total: %a days)') . "\n"; 

if ($start < $end) {
  echo "Start is before the end!\n"; 
}

// output all thursdays between $start and $end 
$periodInterval = DateInterval::createFromDateString('first thursday'); 
$periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE); 

foreach ($periodInterval as $date) {
  echo $date->format('Y-m-d') . ' '; 
}
