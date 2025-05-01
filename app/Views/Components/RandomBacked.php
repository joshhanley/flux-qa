<?php

namespace App\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RandomBacked extends Component
{
    public $test = 'test';
    public function render(): View|Closure|string
    {
        return view('components.random-backed');
    }
}