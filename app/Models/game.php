<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    protected $table = "games";
    protected $fillable = ["uuid", "user", "choices", "time_used", "status"];
}
