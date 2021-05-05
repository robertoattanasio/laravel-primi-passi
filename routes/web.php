<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});


Route::get('about_me', function () {
    $data = [
        'about_me' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus earum, corporis incidunt numquam voluptatum ut reprehenderit molestiae facilis tempore quasi, dignissimos animi quisquam laboriosam impedit optio officia! Ratione, non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi atque sed, earum maiores, ad a quae incidunt at minus iste ducimus. Quo dolores minus molestias soluta incidunt temporibus nisi est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur labore amet molestias blanditiis, asperiores, corporis similique odio excepturi numquam voluptate, nam deserunt ut dolore? Minus rerum quidem vero vitae impedit? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium qui voluptatibus natus assumenda accusamus quam id incidunt quod. Mollitia nostrum doloribus quos! Omnis porro neque vitae provident tempora, a laborum.'
    ];

    return view('about_me', $data);
});

Route::get('contact', function () {
    $data = [
        'message' => 'Get in touch with me if you want to know more',
        'contacts' => [
            'roberto@gmail.com',
            'info@wolfstudios.com',
            ]
    ];
    return view('contact', $data);
});
