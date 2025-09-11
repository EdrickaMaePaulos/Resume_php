<?php
$cars = [
    [
        'make' => 'Toyota',
        'model' => 'Corolla',
        'year' => 2020,
        'color' => 'White'
    ],
    [
        'make' => 'Honda',
        'model' => 'Civic',
        'year' => 2019,
        'color' => 'Black'
    ],
    [
        'make' => 'Ford',
        'model' => 'Focus',
        'year' => 2018,
        'color' => 'Blue'
    ]
];

// Example: print car records
foreach ($cars as $car) {
    echo "BRAND: {$car['make']},\nMODEL: {$car['model']},\nYEAR: {$car['year']},\nCOLOR: {$car['color']}\n\n";
}
?>