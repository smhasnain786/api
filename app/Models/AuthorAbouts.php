<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorAbouts extends Model
{
    use HasFactory;
    protected $table = 'author_abouts';
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
    public function authorAchievements()
    {
        return $this->belongsTo(AuthorAchivements::class, 'achievement_id');
    }
}
