<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passport;
class Passport_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'passport_id', 'name','nationality'
    ];
 
    public function passport()
    {
        return $this->belongsTo(Passport::class, 'passport_id');
    }

}
