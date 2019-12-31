<?php
/**
 * Created by PhpStorm.
 * User: udywarnasuriya
 * Date: 2019-12-31
 * Time: 02:27
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'review',
        'name'
    ];
}
