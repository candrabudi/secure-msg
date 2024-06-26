<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    public function UserCentral()
    {
        return $this->hasOne(User::class, 'id', 'central_id')
            ->with('UserProfile');
    }
    
    public function UserParent()
    {
        return $this->hasOne(User::class, 'id', 'parent_id')
            ->with('UserProfile');
    }
}
