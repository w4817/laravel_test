<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    use Searchable;
}
