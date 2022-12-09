<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skateboard extends Model
{
    use HasFactory;

    protected $fillable = ['skateboard_name', 'skateboard_model', 'skateboard_length', 'skateboard_price'];
}
