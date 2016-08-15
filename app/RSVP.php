<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    protected $table = 'rsvp';
    protected $fillable = ['full_name', 'email'];
}
