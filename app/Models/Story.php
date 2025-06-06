<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    // Specify which attributes are mass assignable
    protected $fillable = ['name', 'phone', 'country_code', 'subject', 'story'];
}
