<?php 

$name = "Larry"; 

echo "Hello " . $name . '<br>' ; 

echo gettype($name);

$fileIsUploaded = true;

if ($fileIsUploaded) {
    echo "Your file has uploaded.";
    echo '<br>';
}
else {
    echo "Your file could not be uploaded. ";
}

var_dump(is_int('alex'));


$users = [
    [
        'username' => 'larry',
        'email' => 'larry@larry.com',
        'likes' => ['music', 'food']
    ],
    [
        'username' => 'keith',
        'email' => 'keith@keith.com',
        'likes' => ['books', 'dayTrading']
    ],
    [
        'username' => 'vincent',
        'email' => 'vincent@vincent.com',
        'likes' => ['jujitsu', 'chiropractory']
    ]
];

echo '<pre>' . $users[2]['likes'][0] . '</pre>';

foreach ($users as $user) {
    echo $user['likes'][0] . '<br>';
}