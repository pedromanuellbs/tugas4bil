<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Users;

class News extends Model
{
    protected $protected = ['id'];

    public function getProducts()
    {
        return $this->belongsTo(Users::class)->get();
    }
}
