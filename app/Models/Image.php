<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Crousel;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Review;
use App\Models\About;
use App\Models\Blog;
use App\Models\Team;

class Image extends Model
{
    use HasFactory;
    public function crousel()
    {
        return $this->belongsTo(Crousel::class, 'page_id');
    }

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'page_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'page_id');
    }
    public function review()
    {
        return $this->belongsTo(Review::class, 'page_id');
    }
    public function about()
    {
        return $this->belongsTo(About::class, 'page_id');
    }
    public function team()
    {
        return $this->belongsTo(Team::class, 'page_id');
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'page_id');
    }









}
