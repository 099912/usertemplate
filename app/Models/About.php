<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class About extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->hasMany(Image::class, 'page_id');
    }
}
