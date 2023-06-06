<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable=[
        'fatherName',
        'nationalNumber',
        'phoneNumber',
        'state',
        'placeId',
        'userId'
    ];
    public function place(){
        return $this->belongsToMany(Place::class);
    }
    public function lands(){
        return $this->hasMany(Land::class);
    }
    public function user1(){
        return $this->belongsToMany(User1::class);
    }
}
