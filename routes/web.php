<?php

use App\Models\Aquatic;
use App\Models\Edibles;
use App\Models\Mammal;
use App\Models\Plant;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {


    $data = [
        'plants'=> [
            'Arboreal',
            'Aquatic'
        ],
        'fungus'=>[
            'Edibles',
            'Hallucinogens'
        ],
        'animal'=> [
            'Mammal',
            'Bird'
        ]
    ];

    //Arboreal
    $arboreal = new \App\Models\Arboreal('Pino',1956);
    echo $arboreal->getName();

    $arboreal = new Aquatic('Anubias',1956);
    echo $arboreal->getName();

    echo '<hr>';

    $edible= new Edibles('Rovelló',1200);
    echo  $edible->name;
    echo  $edible->discovery_date;


    $mammal= new Mammal('Homo Sapiens',1890);
    echo  $mammal->name;
    echo  $mammal->discovery_date;






});
