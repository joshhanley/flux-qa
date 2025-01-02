<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Document extends Model
{
    use Sushi;

    protected $rows = [
        ['id' => 1, 'title' => 'Title 1'],
        ['id' => 2, 'title' => 'Title 2'],
        ['id' => 3, 'title' => 'Title 3'],
        ['id' => 4, 'title' => 'Title 4'],
        ['id' => 5, 'title' => 'Title 5'],
        ['id' => 6, 'title' => 'Title 6'],
    ];
}