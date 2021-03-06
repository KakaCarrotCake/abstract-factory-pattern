<?php
// Include the autoload definitions generated -
// automatically by the Composer.
include_once __DIR__ . '/../vendor/autoload.php';

// -------------------------------------------
//  BLADE TEMPLATE ENGINE IMPLEMENTATION
// -------------------------------------------
// Instantiate the Blade module to automatically load the home view.
$blade = new \Jenssegers\Blade\Blade(__DIR__. '/../resources/views', __DIR__. '/../storage/cache');
echo $blade->make('home', [
    'medabots' => [
        (new \App\Factories\RangedMedabotFactory())->build(),
        (new \App\Factories\RangedMedabotFactory())->build(),
        (new \App\Factories\MeleeMedabotFactory())->build(),
    ]
]);