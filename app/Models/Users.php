<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class Users extends Model
{
    protected $protected = ['id'];

    public function getProducts()
    {
        return $this->hasMany(News::class)->get();
    }
}
