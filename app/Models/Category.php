<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

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
