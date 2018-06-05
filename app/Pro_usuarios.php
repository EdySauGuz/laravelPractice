<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro_usuarios extends Model
{
    public $timestamps = false;

    protected $hidden = [
        'tPassword'
    ];
}
