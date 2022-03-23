<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'provinces';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
    ];
}
