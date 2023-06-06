<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;
    protected $fillable=[
        'userName',
        'userPhone',
        'email',
        'password',
    ];
    protected $table='users1';
    public function families(){
        return $this->hasMany(Family::class);
    }
}
