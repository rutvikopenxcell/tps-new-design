<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageList extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'languagelist';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}
