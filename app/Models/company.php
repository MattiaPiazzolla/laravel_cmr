<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'P_iva',
        'address',
        'phone_number',
        'email',
        'website'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}