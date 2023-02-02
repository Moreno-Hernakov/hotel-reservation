<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User(){
        return $this->hasOne(User::class);
    }
}