<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Software extends Model
{
    protected $table = 'software';

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'version',
        'description',
        'thumbnail',
        'file_path',
        'file_size',
        'download_count',
        'category_id',
    ];

    protected $casts = [
        'is_active' => 'boolean', // Chuyển đổi tinyint thành true/false
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(CategorySoftware::class, 'category_id', 'id');
    }

    public function scopeInCategoryWithChildren($query, $categoryId)
    {
        $category = CategorySoftware::with('children')->find($categoryId);

        if (!$category)
            return $query;

        $ids = collect([$category->id])
            ->merge($category->children->pluck('id'))
            ->toArray();

        return $query->whereIn('category_id', $ids);
    }

    public function scopeSearch(Builder $query, $needle)
    {
        return $query->when($needle, function (Builder $q) use ($needle) {
            $q->where('name', 'LIKE', "%{$needle}%");
        });
    }


    public function scopeFilter(Builder $query, $keyword)
    {
        return $query->when($keyword ?? null, function (Builder $q) use ($keyword) {
            // Lấy tất cả ID của danh mục cha + con
            $category_id = CategorySoftware::where('id', $keyword)
                ->orWhere('parent_id', $keyword)
                ->pluck('id')
                ->toArray();

            // Lọc phần mềm thuộc danh mục đó
            $q->whereIn('category_id', $category_id);
        });
    }

}
