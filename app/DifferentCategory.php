<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DifferentCategory extends Model
{
    protected $fillable = ['title', 'slug'];

    protected $table = 'different_categories';

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
