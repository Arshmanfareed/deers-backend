<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function members()
    {
        return $this->hasMany(User::class, 'department_id');
    }
}
