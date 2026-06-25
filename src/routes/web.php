<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\Portfolio;

/* NOTE: Do Not Remove */

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

/* END */

Route::get('/', Portfolio::class);

Route::get('/projects', function () {
    return view('projects.index');
});