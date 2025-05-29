<?php
$time = rand(1, 23);

$animalMeal = '';
$foodItems = '';

if ($time >= 5 && $time < 9) {
    $animalMeal = 'breakfast';
    $foodItems = 'Bananas, Apples, and Oats';
} elseif ($time >= 12 && $time < 14) {
    $animalMeal = 'lunch';
    $foodItems = 'Fish, Chicken, and Vegetables';
} elseif ($time >= 19 && $time < 21) {
    $animalMeal = 'dinner';
    $foodItems = 'Steak, Carrots, and Broccoli';
} else {
    $animalMeal = 'no animalMeal';
    $foodItems = 'not being fed';
}

echo "Current hour is: $time" . " the animals should have $animalMeal" . " they are getting: $foodItems";
?>