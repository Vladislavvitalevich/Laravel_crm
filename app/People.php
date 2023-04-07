<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['pip', 'age', 'count_family', 'age_children', 'study_children', 'vpo', 'gromada',
        'w_y_live_now', 'have_work', 'phone', 'volonter', 'w_y_g_do', 'h_m_time'];
    protected $table = 'people';

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function different_categories()
    {
        return $this->hasMany(DifferentCategory::class);
    }
}
