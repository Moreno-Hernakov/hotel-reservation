<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reservasi(){
        return $this->hasOne(reservasi::class);
    }
}
