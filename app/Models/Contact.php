<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['first_name','last_name','email','message','category_id'];

    /**
     * Get the category that owns the contacts.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
