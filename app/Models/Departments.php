<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Departments extends Model
{
    use HasFactory;

    protected $table = 'departsments';
    protected $fillable = [
        'name',
        'city',
        'address',
        'phone',
        'email',
        'status',
        'user_role',
        'user_id',
    ];

    public function members()
    {
        return $this->hasMany(User::class, 'department_id');
    }
}
