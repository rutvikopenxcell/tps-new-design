<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUsCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'whyusfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];
}
