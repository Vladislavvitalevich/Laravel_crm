<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $table = 'elements';
    protected $fillable = ['needs_id','name','unit','count'];

    public function need()
    {
        return $this->belongsTo('App\Need', 'needs_id');
    }
}
