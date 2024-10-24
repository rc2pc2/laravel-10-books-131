<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superbook extends Model
{
    protected $table = "superbooks"; // modo per inserire il nome della tabella custom
    use HasFactory;
}
