<?php

use Illuminate\Support\Facades\Route;

Route::get('docs/components/button', function () {
    return view('docs.components.button');
})->name('docs.component.button');