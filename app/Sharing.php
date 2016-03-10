<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharing extends Model
{
    protected $table = 'sharing';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
