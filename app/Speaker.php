<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'speakers';
    protected $guarded = [];
    
    public $rules = [
        'full_name' => 'required',
        'email' => 'required|email'
    ];
}
