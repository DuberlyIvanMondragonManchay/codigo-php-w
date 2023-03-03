<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruc',
        'business_name',
        'sector',
        'size',
        'phone',
        'address',
        'website',
        'description',
        'district_id',
    ];
    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
