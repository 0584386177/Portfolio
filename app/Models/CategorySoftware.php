<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorySoftware extends Model
{
    protected $table = 'category_software';

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
    ];
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function softwares()
    {
        return $this->hasMany(Software::class, 'category_id', 'id');
    }
}
