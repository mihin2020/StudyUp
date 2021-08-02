<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editors extends Model
{
    protected $fillable = [
        'nom', 'icone'
    ];
}
