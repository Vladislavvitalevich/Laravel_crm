<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'slug'];
    protected $table = 'services';

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
