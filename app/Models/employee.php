<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'company_id',
        'phone number',
        'email',
        'address',
        'role',
        'photo'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}