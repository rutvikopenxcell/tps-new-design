<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialCms extends Model
{
     /**
     * Added just to demonstrate that models work
     * @return String
     */
    protected $table = 'testimonialfrontendcms';
    protected $primaryKey = 'id';   
    protected $guarded   = ['id'];

   
}
