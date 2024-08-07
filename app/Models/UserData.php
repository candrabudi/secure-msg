<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
