<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'aboutusfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}
