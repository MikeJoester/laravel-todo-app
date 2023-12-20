<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    protected $fillable = [
        'category_name',
        'category_description',
    ];
}
