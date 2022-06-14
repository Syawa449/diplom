<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'title',
        'cost',
        'instock',
        'instockboolean',
        'brand',
        'condition',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
