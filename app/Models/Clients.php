<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'family',
        'phone',
        'client_id',
    ];

    public function products()
    {
        return $this->hasMany(Products::class)->orderBy('id', 'desc');
    }
}
