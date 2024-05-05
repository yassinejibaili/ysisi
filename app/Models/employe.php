<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
    protected $fillable =['fullname', 'registration_number', 'departement', 'CIN', 'phone', 'address', 'city', 'hired_date' ];
}
