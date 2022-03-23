<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'municipalities';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'province_id',
    ];
}
