<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user_collection extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function User(){
        return $this->belongsTo(User::class);  
    }

}
