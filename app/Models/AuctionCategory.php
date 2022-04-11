<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuctionCategory extends Model
{
    use SoftDeletes;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
    ];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
}
