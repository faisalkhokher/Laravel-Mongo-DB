<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mongo extends Model
{
    use HasFactory;
    protected $guarded = [];
}
