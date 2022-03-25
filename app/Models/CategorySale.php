<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorySale extends Model
{
    use SoftDeletes;

    /**
     * @var string $table
     */
    protected $table = 'categories_sales';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
    ];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'sub_categories_id');
    }
}
