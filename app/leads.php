<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    protected $fillable = ['firstname', 'lastname', 'phone', 'email', 'requirement', 'contacted'];
}
