<?php

use App\Components;
use App\Http\Controllers\FluxInputsController;
use App\Livewire\Exploit;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
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

Route::get('exploit', Exploit::class);

Route::get('randomasdasd', function () {
    return '<input /><button>Click me</button>';
});

Route::get('nativemodal', function () {
    return Blade::compileString(<<<'HTML'
        <div>
            <dialog id="thedialog" oncancel="console.log('cancel'); event.preventDefault()">
            <button autofocus>Close</button>
            <p>This modal dialog has a groovy backdrop!</p>
            </dialog>

            <button onclick="document.getElementById('thedialog').showModal()">Show the dialog</button>
        </div>
    HTML);
});

foreach (Components::get() as $component) {
    Volt::route('/'.$component, $component);
}

Volt::route('/', 'index')->name('home');
Volt::route('/test', 'index')->name('test');
Volt::route('/other', 'index')->name('other');
Volt::route('/playground/{id?}', 'playground')->name('playground');

Route::post('/inputs', FluxInputsController::class)->name('inputs.post');
Route::get('/inputs', FluxInputsController::class)->name('inputs');

Route::view('/outside', 'outside')->name('outside');

Route::get('errors', function () {
    return view('view-error');
});
