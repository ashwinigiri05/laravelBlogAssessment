<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{

    protected $guarded = [];
    
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

}
