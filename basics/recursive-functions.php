<?php

function printValues($arr) {
  global $count;
  global $items;

  // check input is an array
  if(!is_array($arr)) {
    die("ERROR: Input is not an array.");
  }

  foreach($arr as $a) {
    if ($is_array($a)) {
      printValues($a)
    }
    else {
      $items[] = $a;
      $count++;
    }
  }
  return array('total' => $count, 'values' => $items);
}

// Define nested array.
$species = array(
  "birds" => array(
    "Eagle",
    "Parrot",
    "Swan"
  ),
  "mammals" => array(
    "Human",
    "Cat" => array(
      "Lion",
      "Tiger",
      "Jaguar"
    ),
    "Elephant",
    "Monkey"
  ),
  "reptiles" => array(
    "snake" => array(
      "Cobra" => array(
        "King Cobra",
        "Egyptian Cobra"
      ),
      "Viper",
      "Anaconda"
    ),
    "Crocodile",
    "Dinosaur" => array(
      "T-rex",
      "Alamosaurus"
    )
  )
)

$result = printValues($species);
echo $result['total'] . 'value(s) found: ';
echo implode(', ', $result['values']);
