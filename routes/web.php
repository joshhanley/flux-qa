<?php

use App\Components;
use Livewire\Volt\Volt;

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

foreach (Components::get() as $component) {
    Volt::route('/'.$component, $component);
}

Volt::route('/', 'index')->name('home');
Volt::route('/other', 'index')->name('other');
