<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'text',
        'img',
        // 'created_at',
        // 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
