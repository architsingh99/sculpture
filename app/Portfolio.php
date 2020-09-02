<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    public function categoryData()
    {
        return $this->belongsTo('\App\Category', 'category');
    }
}
