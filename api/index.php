<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Origin');
header('Content-Type: application/json; charset=utf-8');

$posts = [];
$post = [
    'image' => [
        'src' => 'src/images/1.jpg',
        'alt' => 'Corporate Disorganizer',
    ],
    'label' => 'Business',
    'title' => 'Corporate<br>Disorganizer',
    'term' => '1 year mission',
    'location' => 'Lunar Spaceship, Venus<br>Right Ascension: 08h 37m',
    'salary' => '40k ES / Year',
    'description' => 'The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common',
];

for($i = 0; $i < 18; $i++) {
    $posts[$i] = $post;
}

echo json_encode($posts);
