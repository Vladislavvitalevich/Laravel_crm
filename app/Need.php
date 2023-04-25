<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    protected $table = 'needs';
    protected $fillable = ['formation','responsible','community','number'];

    public function elements()
    {
        return $this->hasMany('App\Element', 'needs_id');
    }
}
