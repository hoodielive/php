<?php

$contacts = array(
  array(
    "name" => "Peter Popoff",
    "email" => "peterpopoff@gmail.com"
  ),
  array(
    "name" => "Clark Kent",
    "email" => "ckent@gmail.com"
  ),
  array(
    "name" => "Harry Potter",
    "email" => "hpotter@gmail.com"
  ),
);

echo "Peter Popoff's email id is: " . $contacts[0]['email'];

print_r($contacts);
