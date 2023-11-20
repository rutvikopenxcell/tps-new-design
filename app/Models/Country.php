<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'country';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}
