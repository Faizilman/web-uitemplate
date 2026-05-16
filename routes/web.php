<?php

use App\Http\Controllers\DocsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/docs/1.x/{folder}/{page}', [DocsController::class, 'show'])
    ->name('docs.show');

// Route::get('/test', function () {
//     return preg_replace_callback(

//         '/<p>\[\[(.*?):(.*?)\]\]<\/p>/',

//         function ($matches) {

//             // $component =
//             //  trim($matches[1]);

//             return $matches[2];

//         },

//         '<p>[[demo:button]]</p>'

//     );
// });

require __DIR__.'/auth.php';
