<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

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

    public function municipalities()
    {
        return $this->hasMany(Municipality::class, 'province_id');
    }
}
