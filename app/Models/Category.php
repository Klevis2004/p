<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['category'];
    use HasFactory;
    // public function libratPosts()
    // {
    //     return $this->hasMany(LibratPost::class, 'category_id');
    // }
}
