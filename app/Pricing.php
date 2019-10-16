<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $table = 'pricing';

    protected $fillable = ['package_name', 'price', 'description', 'offer', 'available', 'color'];
}
