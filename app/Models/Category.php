<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get a specific category.
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
