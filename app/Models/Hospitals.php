<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    use HasFactory;
    protected $table = 'hospitals';
    protected $fillable = [
        'hospitalname',
        'hospitalemail',
        'contact',
        'location',
        'logo',
        'registrationdate'
    ];
}
