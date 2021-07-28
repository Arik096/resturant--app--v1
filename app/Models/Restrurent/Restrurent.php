<?php

namespace App\Models\Restrurent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restrurent extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'phone',
        'address',
        'manager_id'
    ];
}
