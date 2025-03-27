<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "capacity"
    ];


    // 2 kapcsolat
    public function cars()
    {
        return $this->hasMany( Car::class, "service_id", "id");
    }

    public function mechanics()
    {
        return $this->hasMany( Mechanic::class, "service_id", "id");
    }

}
