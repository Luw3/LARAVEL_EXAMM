<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class informations extends Model
{
    protected $table = 'informations';
    protected   $fillable = [
        
        'name',
        'email',
        'contact',
        'address',
        'objective',
        'education',

    ];
}
