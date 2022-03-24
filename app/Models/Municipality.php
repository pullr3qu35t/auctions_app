<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipality extends Model
{
    use SoftDeletes;

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

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
