<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user_recipt extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function User(){
        return $this->belongsTo(User::class);  
    }

}
