<?php

use App\Components;
use App\Http\Controllers\FluxInputsController;
use App\Livewire\ClassComponent;
use App\Livewire\Exploit;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
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

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/fluxqa.test/livewire/update', $handle)->name('update-custom');
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/fluxqa.test/livewire/livewire.js', $handle)->name('script-custom');
});

Route::get('exploit', Exploit::class);

Route::get('randomasdasd', function () {
    return '<input /><button>Click me</button>';
});

Route::view('sample2', 'sample');
Route::view('sticky-header', 'sticky-header');

Route::get('table-test', function () {
    sleep(1);
    $users = \App\Models\User::query()
        ->paginate(50);

    return Blade::render(<<<'HTML'
    <x-layouts.app>
        <div class="p-4">
            <flux:table :paginate="$users">
                <flux:table.columns>
                    <flux:table.column>ID</flux:table.column>
                    <flux:table.column>Name</flux:table.column>
                    <flux:table.column>Email</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @foreach ($users as $user)
                        <flux:table.row :key="$user->id">
                            <flux:table.cell class="flex items-center gap-3">
                                {{ $user->id }}
                            </flux:table.cell>

                            <flux:table.cell class="whitespace-nowrap">{{ $user->name }}</flux:table.cell>

                            <flux:table.cell variant="strong">{{ $user->email }}</flux:table.cell>

                            <flux:table.cell>
                                <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforeach
                </flux:table.rows>
            </flux:table>
        </div>
    </x-layouts.app>
    HTML, [
        'users' => $users,
    ]);
});

Route::get('nativemodal', function () {
    return Blade::compileString(<<<'HTML'
        <div>
            <dialog id="thedialog" oncancel="console.log('cancel'); event.preventDefault()">
            <button autofocus>Close</button>
            <p>This modal dialog has a groovy backdrop!</p>
            </dialog>

            <x-test-link href="https://google.com">Google</x-test-link>

            <button onclick="document.getElementById('thedialog').showModal()">Show the dialog</button>
        </div>
    HTML);
});

foreach (Components::get() as $component) {
    Route::livewire('/'.$component, $component);
}

Route::livewire('/', 'index')->name('home');
Route::livewire('/test', 'index')->name('test');
Route::livewire('/other', 'index')->name('other');
Route::livewire('/class-component', ClassComponent::class)->name('class-component');
Route::livewire('/view-class-component','view-class-component')->name('view-class-component');
Route::livewire('/playground/{id?}', 'playground')->name('playground');
Route::livewire('/playground2/{id?}', 'playground2')->name('playground2');
// Route::livewire('/playground/{id?}', 'playground')->name('playground');

Route::post('/inputs', FluxInputsController::class)->name('inputs.post');
Route::get('/inputs', FluxInputsController::class)->name('inputs');

Route::view('/outside', 'outside')->name('outside');

Route::get('errors', function () {
    return view('view-error');
});
