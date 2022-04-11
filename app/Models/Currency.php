<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sign',
        'abbreviation',
        'description',
    ];

    protected $appends = [
        'full_description',
    ];

    public function getFullDescriptionAttribute()
    {
        return trim($this->abbreviation.(!empty($this->description) ? ' - '.$this->description : ''));
    }
}
