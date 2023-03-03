<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'name',
        'country_id',
    ];
    public function provinces()
    {
        return $this->hasMany(Province::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
