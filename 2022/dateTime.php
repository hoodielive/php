<?php 
$raw = '4. 12. 2018'; 
$start = DateTime::createFromFormat('d. m. Y', $raw); 

echo 'Start date: ' . $start->format('Y-m-d') . "\n"; 
