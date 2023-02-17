<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function Comment() {
        return $this->hasMany(Comment::class);
    }

    public function Like() {
        return $this->hasMany(Like::class);
    }
}
