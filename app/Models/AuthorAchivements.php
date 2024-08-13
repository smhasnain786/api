<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorAchivements extends Model
{
    use HasFactory;
    public function author_achivements()
    {
        return $this->belongsTo(AuthorAbouts::class, 'achivement_id');
    }
}
