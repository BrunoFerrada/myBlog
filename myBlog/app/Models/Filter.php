<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'idCategory';
    protected $fillable = [
      'nameCategory', 
    ];
    // Para que lo tome como boolean
    protected $casts = [
      'habilitated' => 'boolean',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'idCategory', 'idCategory');
    }
}
