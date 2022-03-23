<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'categories';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
    ];
}
