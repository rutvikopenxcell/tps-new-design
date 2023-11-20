<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryLanguage extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'countrylanguage';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}
