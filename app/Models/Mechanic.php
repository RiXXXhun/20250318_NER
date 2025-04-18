<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "service_id"
    ];

    // 1 kapcoslat

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
