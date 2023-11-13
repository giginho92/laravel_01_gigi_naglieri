<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    $products = [
        [ 'name' => 'Iphone',
        'price' => 500,
        ],
        [ 'name' => 'Oppo',
        'price' => 60,
        ],
        [ 'name' => 'Samsung',
        'price' => 680,
        ]
    ];
    return view('Shop',['prodotti'=> $products]);
});

Route::get('/contatti', function () {
    $contacts = [
        [ 'name' => 'Anna',
        'number' => 554556400,
        ],
        [ 'name' => 'Jhonny',
        'number' => 6453425340,
        ],
        [ 'name' => 'Luca',
        'number' => 23431324680,
        ]
    ];
    return view('Contatti',['contatti'=> $contacts]);
});
