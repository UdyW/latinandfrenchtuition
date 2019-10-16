<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentSubCategory extends Model
{
    protected $table = 'document_subcategory';

    protected $fillable = ['name','category_id'];

    public function documentCategory(){
        return $this->belongsTo('App\DocumentCategory','category_id');
    }
}
