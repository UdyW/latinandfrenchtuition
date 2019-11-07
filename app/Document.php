<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    protected $fillable = ['subcategory_id', 'name', 'description', 'path', 'available', 'protected'];

    public function documentSubCategory(){
        return $this->belongsTo('App\DocumentSubCategory','subcategory_id');
    }
}
