<?php

$raw = '4. 12. 2018'; 
$start = DateTime::createFromFormat('d. m. Y', $raw); 

echo 'Start date: ' . $start->format('Y-m-d') . "\n"; 

// create a copy of $start and add one month and 6 days 
$end = clone $start; 
$end->add(new DateInterval('P1M6D')); 

$diff = $end->diff($start); 
echo 'Difference: ' . $diff->format('%m month, %d days (total: %a days)') . "\n"; 

