<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $fillable=[
        'type',
        'quantity',
        'profits',
        'familyId',
    ];
    public function family(){
        return $this->belongsToMany(Family::class);
    }
}
