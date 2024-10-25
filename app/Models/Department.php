<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=['name','code','phone'];

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function compliant()
    {
        return $this->hasMany(Complaints::class);
    }
}
