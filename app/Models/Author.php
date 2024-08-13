<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'author';
    protected $primaryKey = 'author_id';
    public function authorAbouts()
{
    return $this->hasMany(AuthorAbouts::class, 'author_id');
}
}
