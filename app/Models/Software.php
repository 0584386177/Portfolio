<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean', // Chuyển đổi tinyint thành true/false
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
