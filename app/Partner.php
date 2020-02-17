<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function city()
    {
        return $this->hasOne(City::class);
    }
}