<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passport_detail;
class Passport extends Model
{
    use HasFactory;
    protected $fillable = [
        'passport_number', 'expirey_date'
    ];

    public function passport_detail()
    {
        return $this->hasOne(Passport_detail::class, 'passport_id');
    }
}
