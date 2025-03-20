<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        "brand",
        "model",
        "year",
        "service_id"
    ];

    //1  kapcsolat
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
